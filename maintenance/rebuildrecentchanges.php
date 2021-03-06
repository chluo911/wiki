<?php
/**
 * Rebuild recent changes from scratch.  This takes several hours,
 * depending on the database size and server configuration.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Maintenance
 * @todo Document
 */

require_once __DIR__ . '/Maintenance.php';

/**
 * Maintenance script that rebuilds recent changes from scratch.
 *
 * @ingroup Maintenance
 */
class RebuildRecentchanges extends Maintenance
{
    /** @var integer UNIX timestamp */
    private $cutoffFrom;
    /** @var integer UNIX timestamp */
    private $cutoffTo;

    public function __construct()
    {
        parent::__construct();
        $this->addDescription('Rebuild recent changes');

        $this->addOption(
            'from',
            "Only rebuild rows in requested time range (in YYYYMMDDHHMMSS format)",
            false,
            true
        );
        $this->addOption(
            'to',
            "Only rebuild rows in requested time range (in YYYYMMDDHHMMSS format)",
            false,
            true
        );
        $this->setBatchSize(200);
    }

    public function execute()
    {
        if (
            ($this->hasOption('from') && !$this->hasOption('to')) ||
            (!$this->hasOption('from') && $this->hasOption('to'))
        ) {
            $this->error("Both 'from' and 'to' must be given, or neither", 1);
        }

        $this->rebuildRecentChangesTablePass1();
        $this->rebuildRecentChangesTablePass2();
        $this->rebuildRecentChangesTablePass3();
        $this->rebuildRecentChangesTablePass4();
        $this->rebuildRecentChangesTablePass5();
        if (!($this->hasOption('from') && $this->hasOption('to'))) {
            $this->purgeFeeds();
        }
        $this->output("Done.\n");
    }

    /**
     * Rebuild pass 1: Insert `recentchanges` entries for page revisions.
     */
    private function rebuildRecentChangesTablePass1()
    {
        $dbw = $this->getDB(DB_MASTER);

        if ($this->hasOption('from') && $this->hasOption('to')) {
            $this->cutoffFrom = wfTimestamp(TS_UNIX, $this->getOption('from'));
            $this->cutoffTo = wfTimestamp(TS_UNIX, $this->getOption('to'));

            $sec = $this->cutoffTo - $this->cutoffFrom;
            $days = $sec / 24 / 3600;
            $this->output("Rebuilding range of $sec seconds ($days days)\n");
        } else {
            global $wgRCMaxAge;

            $days = $wgRCMaxAge / 24 / 3600;
            $this->output("Rebuilding \$wgRCMaxAge=$wgRCMaxAge seconds ($days days)\n");

            $this->cutoffFrom = time() - $wgRCMaxAge;
            $this->cutoffTo = time();
        }

        $this->output("Clearing recentchanges table for time range...\n");
        $rcids = $dbw->selectFieldValues(
            'recentchanges',
            'rc_id',
            [
                'rc_timestamp > ' . $dbw->addQuotes($dbw->timestamp($this->cutoffFrom)),
                'rc_timestamp < ' . $dbw->addQuotes($dbw->timestamp($this->cutoffTo))
            ]
        );
        foreach (array_chunk($rcids, $this->mBatchSize) as $rcidBatch) {
            $dbw->delete('recentchanges', [ 'rc_id' => $rcidBatch ], __METHOD__);
            wfGetLBFactory()->waitForReplication();
        }

        $this->output("Loading from page and revision tables...\n");
        $res = $dbw->select(
            [ 'page', 'revision' ],
            [
                'rev_timestamp',
                'rev_user',
                'rev_user_text',
                'rev_comment',
                'rev_minor_edit',
                'rev_id',
                'rev_deleted',
                'page_namespace',
                'page_title',
                'page_is_new',
                'page_id'
            ],
            [
                'rev_timestamp > ' . $dbw->addQuotes($dbw->timestamp($this->cutoffFrom)),
                'rev_timestamp < ' . $dbw->addQuotes($dbw->timestamp($this->cutoffTo)),
                'rev_page=page_id'
            ],
            __METHOD__,
            [ 'ORDER BY' => 'rev_timestamp DESC' ]
        );

        $this->output("Inserting from page and revision tables...\n");
        $inserted = 0;
        foreach ($res as $row) {
            $dbw->insert(
                'recentchanges',
                [
                    'rc_timestamp' => $row->rev_timestamp,
                    'rc_user' => $row->rev_user,
                    'rc_user_text' => $row->rev_user_text,
                    'rc_namespace' => $row->page_namespace,
                    'rc_title' => $row->page_title,
                    'rc_comment' => $row->rev_comment,
                    'rc_minor' => $row->rev_minor_edit,
                    'rc_bot' => 0,
                    'rc_new' => $row->page_is_new,
                    'rc_cur_id' => $row->page_id,
                    'rc_this_oldid' => $row->rev_id,
                    'rc_last_oldid' => 0, // is this ok?
                    'rc_type' => $row->page_is_new ? RC_NEW : RC_EDIT,
                    'rc_source' => $row->page_is_new
                        ? $dbw->addQuotes(RecentChange::SRC_NEW)
                        : $dbw->addQuotes(RecentChange::SRC_EDIT)
                    ,
                    'rc_deleted' => $row->rev_deleted
                ],
                __METHOD__
            );
            if ((++$inserted % $this->mBatchSize) == 0) {
                wfGetLBFactory()->waitForReplication();
            }
        }
    }

    /**
     * Rebuild pass 2: Enhance entries for page revisions with references to the previous revision
     * (rc_last_oldid, rc_new etc.) and size differences (rc_old_len, rc_new_len).
     */
    private function rebuildRecentChangesTablePass2()
    {
        $dbw = $this->getDB(DB_MASTER);

        $this->output("Updating links and size differences...\n");

        # Fill in the rc_last_oldid field, which points to the previous edit
        $res = $dbw->select(
            'recentchanges',
            [ 'rc_cur_id', 'rc_this_oldid', 'rc_timestamp' ],
            [
                "rc_timestamp > " . $dbw->addQuotes($dbw->timestamp($this->cutoffFrom)),
                "rc_timestamp < " . $dbw->addQuotes($dbw->timestamp($this->cutoffTo))
            ],
            __METHOD__,
            [ 'ORDER BY' => 'rc_cur_id,rc_timestamp' ]
        );

        $lastCurId = 0;
        $lastOldId = 0;
        $lastSize = null;
        $updated = 0;
        foreach ($res as $obj) {
            $new = 0;

            if ($obj->rc_cur_id != $lastCurId) {
                # Switch! Look up the previous last edit, if any
                $lastCurId = intval($obj->rc_cur_id);
                $emit = $obj->rc_timestamp;

                $row = $dbw->selectRow(
                    'revision',
                    [ 'rev_id', 'rev_len' ],
                    [ 'rev_page' => $lastCurId, "rev_timestamp < " . $dbw->addQuotes($emit) ],
                    __METHOD__,
                    [ 'ORDER BY' => 'rev_timestamp DESC' ]
                );
                if ($row) {
                    $lastOldId = intval($row->rev_id);
                    # Grab the last text size if available
                    $lastSize = !is_null($row->rev_len) ? intval($row->rev_len) : null;
                } else {
                    # No previous edit
                    $lastOldId = 0;
                    $lastSize = null;
                    $new = 1; // probably true
                }
            }

            if ($lastCurId == 0) {
                $this->output("Uhhh, something wrong? No curid\n");
            } else {
                # Grab the entry's text size
                $size = (int)$dbw->selectField(
                    'revision',
                    'rev_len',
                    [ 'rev_id' => $obj->rc_this_oldid ],
                    __METHOD__
                );

                $dbw->update(
                    'recentchanges',
                    [
                        'rc_last_oldid' => $lastOldId,
                        'rc_new' => $new,
                        'rc_type' => $new ? RC_NEW : RC_EDIT,
                        'rc_source' => $new === 1
                            ? $dbw->addQuotes(RecentChange::SRC_NEW)
                            : $dbw->addQuotes(RecentChange::SRC_EDIT),
                        'rc_old_len' => $lastSize,
                        'rc_new_len' => $size,
                    ],
                    [
                        'rc_cur_id' => $lastCurId,
                        'rc_this_oldid' => $obj->rc_this_oldid,
                        'rc_timestamp' => $obj->rc_timestamp // index usage
                    ],
                    __METHOD__
                );

                $lastOldId = intval($obj->rc_this_oldid);
                $lastSize = $size;

                if ((++$updated % $this->mBatchSize) == 0) {
                    wfGetLBFactory()->waitForReplication();
                }
            }
        }
    }

    /**
     * Rebuild pass 3: Insert `recentchanges` entries for action logs.
     */
    private function rebuildRecentChangesTablePass3()
    {
        global $wgLogTypes, $wgLogRestrictions;

        $dbw = $this->getDB(DB_MASTER);

        $this->output("Loading from user, page, and logging tables...\n");

        $res = $dbw->select(
            [ 'user', 'logging', 'page' ],
            [
                'log_timestamp',
                'log_user',
                'user_name',
                'log_namespace',
                'log_title',
                'log_comment',
                'page_id',
                'log_type',
                'log_action',
                'log_id',
                'log_params',
                'log_deleted'
            ],
            [
                'log_timestamp > ' . $dbw->addQuotes($dbw->timestamp($this->cutoffFrom)),
                'log_timestamp < ' . $dbw->addQuotes($dbw->timestamp($this->cutoffTo)),
                'log_user=user_id',
                // Some logs don't go in RC since they are private.
                // @FIXME: core/extensions also have spammy logs that don't go in RC.
                'log_type' => array_diff($wgLogTypes, array_keys($wgLogRestrictions)),
            ],
            __METHOD__,
            [ 'ORDER BY' => 'log_timestamp DESC' ],
            [
                'page' =>
                    [ 'LEFT JOIN', [ 'log_namespace=page_namespace', 'log_title=page_title' ] ]
            ]
        );

        $field = $dbw->fieldInfo('recentchanges', 'rc_cur_id');

        $inserted = 0;
        foreach ($res as $row) {
            $dbw->insert(
                'recentchanges',
                [
                    'rc_timestamp' => $row->log_timestamp,
                    'rc_user' => $row->log_user,
                    'rc_user_text' => $row->user_name,
                    'rc_namespace' => $row->log_namespace,
                    'rc_title' => $row->log_title,
                    'rc_comment' => $row->log_comment,
                    'rc_minor' => 0,
                    'rc_bot' => 0,
                    'rc_patrolled' => 1,
                    'rc_new' => 0,
                    'rc_this_oldid' => 0,
                    'rc_last_oldid' => 0,
                    'rc_type' => RC_LOG,
                    'rc_source' => $dbw->addQuotes(RecentChange::SRC_LOG),
                    'rc_cur_id' => $field->isNullable()
                        ? $row->page_id
                        : (int)$row->page_id, // NULL => 0,
                    'rc_log_type' => $row->log_type,
                    'rc_log_action' => $row->log_action,
                    'rc_logid' => $row->log_id,
                    'rc_params' => $row->log_params,
                    'rc_deleted' => $row->log_deleted
                ],
                __METHOD__
            );

            if ((++$inserted % $this->mBatchSize) == 0) {
                wfGetLBFactory()->waitForReplication();
            }
        }
    }

    /**
     * Rebuild pass 4: Mark bot and autopatrolled entries.
     */
    private function rebuildRecentChangesTablePass4()
    {
        global $wgUseRCPatrol, $wgMiserMode;

        $dbw = $this->getDB(DB_MASTER);

        list($recentchanges, $usergroups, $user) =
            $dbw->tableNamesN('recentchanges', 'user_groups', 'user');

        # @FIXME: recognize other bot account groups (not the same as users with 'bot' rights)
        # @NOTE: users with 'bot' rights choose when edits are bot edits or not. That information
        # may be lost at this point (aside from joining on the patrol log table entries).
        $botgroups = [ 'bot' ];
        $autopatrolgroups = $wgUseRCPatrol ? User::getGroupsWithPermission('autopatrol') : [];

        # Flag our recent bot edits
        if ($botgroups) {
            $botwhere = $dbw->makeList($botgroups);

            $this->output("Flagging bot account edits...\n");

            # Find all users that are bots
            $sql = "SELECT DISTINCT user_name FROM $usergroups, $user " .
                "WHERE ug_group IN($botwhere) AND user_id = ug_user";
            $res = $dbw->query($sql, __METHOD__);

            $botusers = [];
            foreach ($res as $obj) {
                $botusers[] = $obj->user_name;
            }

            # Fill in the rc_bot field
            if ($botusers) {
                $rcids = $dbw->selectFieldValues(
                    'recentchanges',
                    'rc_id',
                    [
                        'rc_user_text' => $botusers,
                        "rc_timestamp > " . $dbw->addQuotes($dbw->timestamp($this->cutoffFrom)),
                        "rc_timestamp < " . $dbw->addQuotes($dbw->timestamp($this->cutoffTo))
                    ],
                    __METHOD__
                );

                foreach (array_chunk($rcids, $this->mBatchSize) as $rcidBatch) {
                    $dbw->update(
                        'recentchanges',
                        [ 'rc_bot' => 1 ],
                        [ 'rc_id' => $rcidBatch ],
                        __METHOD__
                    );
                    wfGetLBFactory()->waitForReplication();
                }
            }
        }

        # Flag our recent autopatrolled edits
        if (!$wgMiserMode && $autopatrolgroups) {
            $patrolwhere = $dbw->makeList($autopatrolgroups);
            $patrolusers = [];

            $this->output("Flagging auto-patrolled edits...\n");

            # Find all users in RC with autopatrol rights
            $sql = "SELECT DISTINCT user_name FROM $usergroups, $user " .
                "WHERE ug_group IN($patrolwhere) AND user_id = ug_user";
            $res = $dbw->query($sql, __METHOD__);

            foreach ($res as $obj) {
                $patrolusers[] = $dbw->addQuotes($obj->user_name);
            }

            # Fill in the rc_patrolled field
            if ($patrolusers) {
                $patrolwhere = implode(',', $patrolusers);
                $sql2 = "UPDATE $recentchanges SET rc_patrolled=1 " .
                    "WHERE rc_user_text IN($patrolwhere) " .
                    "AND rc_timestamp > " . $dbw->addQuotes($dbw->timestamp($this->cutoffFrom)) . ' ' .
                    "AND rc_timestamp < " . $dbw->addQuotes($dbw->timestamp($this->cutoffTo));
                $dbw->query($sql2);
            }
        }
    }

    /**
     * Rebuild pass 5: Delete duplicate entries where we generate both a page revision and a log entry
     * for a single action (upload only, at the moment, but potentially also move, protect, ...).
     */
    private function rebuildRecentChangesTablePass5()
    {
        $dbw = wfGetDB(DB_MASTER);

        $this->output("Removing duplicate revision and logging entries...\n");

        $res = $dbw->select(
            [ 'logging', 'log_search' ],
            [ 'ls_value', 'ls_log_id' ],
            [
                'ls_log_id = log_id',
                'ls_field' => 'associated_rev_id',
                'log_type' => 'upload',
                'log_timestamp > ' . $dbw->addQuotes($dbw->timestamp($this->cutoffFrom)),
                'log_timestamp < ' . $dbw->addQuotes($dbw->timestamp($this->cutoffTo)),
            ],
            __METHOD__
        );

        $updates = 0;
        foreach ($res as $obj) {
            $rev_id = $obj->ls_value;
            $log_id = $obj->ls_log_id;

            // Mark the logging row as having an associated rev id
            $dbw->update(
                'recentchanges',
                /*SET*/ 
                [ 'rc_this_oldid' => $rev_id ],
                /*WHERE*/ 
                [ 'rc_logid' => $log_id ],
                __METHOD__
            );

            // Delete the revision row
            $dbw->delete(
                'recentchanges',
                /*WHERE*/ 
                [ 'rc_this_oldid' => $rev_id, 'rc_logid' => 0 ],
                __METHOD__
            );

            if ((++$updates % $this->mBatchSize) == 0) {
                wfGetLBFactory()->waitForReplication();
            }
        }
    }

    /**
     * Purge cached feeds in $messageMemc
     */
    private function purgeFeeds()
    {
        global $wgFeedClasses, $messageMemc;

        $this->output("Deleting feed timestamps.\n");

        foreach ($wgFeedClasses as $feed => $className) {
            $messageMemc->delete(wfMemcKey('rcfeed', $feed, 'timestamp')); # Good enough for now.
        }
    }
}

$maintClass = "RebuildRecentchanges";
require_once RUN_MAINTENANCE_IF_MAIN;
