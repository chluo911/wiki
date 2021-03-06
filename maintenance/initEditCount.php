<?php
/**
 * Init the user_editcount database field based on the number of rows in the
 * revision table.
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
 */

require_once __DIR__ . '/Maintenance.php';

class InitEditCount extends Maintenance
{
    public function __construct()
    {
        parent::__construct();
        $this->addOption('quick', 'Force the update to be done in a single query');
        $this->addOption('background', 'Force replication-friendly mode; may be inefficient but
		avoids locking tables or lagging replica DBs with large updates;
		calculates counts on a replica DB if possible.

Background mode will be automatically used if multiple servers are listed
in the load balancer, usually indicating a replication environment.');
        $this->addDescription('Batch-recalculate user_editcount fields from the revision table');
    }

    public function execute()
    {
        $dbw = $this->getDB(DB_MASTER);
        $user = $dbw->tableName('user');
        $revision = $dbw->tableName('revision');

        // Autodetect mode...
        if ($this->hasOption('background')) {
            $backgroundMode = true;
        } elseif ($this->hasOption('quick')) {
            $backgroundMode = false;
        } else {
            $backgroundMode = wfGetLB()->getServerCount() > 1;
        }

        if ($backgroundMode) {
            $this->output("Using replication-friendly background mode...\n");

            $dbr = $this->getDB(DB_REPLICA);
            $chunkSize = 100;
            $lastUser = $dbr->selectField('user', 'MAX(user_id)', '', __METHOD__);

            $start = microtime(true);
            $migrated = 0;
            for ($min = 0; $min <= $lastUser; $min += $chunkSize) {
                $max = $min + $chunkSize;
                $result = $dbr->query(
                    "SELECT
						user_id,
						COUNT(rev_user) AS user_editcount
					FROM $user
					LEFT OUTER JOIN $revision ON user_id=rev_user
					WHERE user_id > $min AND user_id <= $max
					GROUP BY user_id",
                    __METHOD__
                );

                foreach ($result as $row) {
                    $dbw->update(
                        'user',
                        [ 'user_editcount' => $row->user_editcount ],
                        [ 'user_id' => $row->user_id ],
                        __METHOD__
                    );
                    ++$migrated;
                }

                $delta = microtime(true) - $start;
                $rate = ($delta == 0.0) ? 0.0 : $migrated / $delta;
                $this->output(sprintf(
                    "%s %d (%0.1f%%) done in %0.1f secs (%0.3f accounts/sec).\n",
                    wfWikiID(),
                    $migrated,
                    min($max, $lastUser) / $lastUser * 100.0,
                    $delta,
                    $rate
                ));

                wfWaitForSlaves();
            }
        } else {
            $this->output("Using single-query mode...\n");
            $sql = "UPDATE $user SET user_editcount=(SELECT COUNT(*) FROM $revision WHERE rev_user=user_id)";
            $dbw->query($sql);
        }

        $this->output("Done!\n");
    }
}

$maintClass = "InitEditCount";
require_once RUN_MAINTENANCE_IF_MAIN;
