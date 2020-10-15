<?php
/**
 * Update image metadata records.
 *
 * Usage: php rebuildImages.php [--missing] [--dry-run]
 * Options:
 *   --missing  Crawl the uploads dir for images without records, and
 *              add them only.
 *
 * Copyright © 2005 Brion Vibber <brion@pobox.com>
 * https://www.mediawiki.org/
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
 * @author Brion Vibber <brion at pobox.com>
 * @ingroup Maintenance
 */

require_once __DIR__ . '/Maintenance.php';

/**
 * Maintenance script to update image metadata records.
 *
 * @ingroup Maintenance
 */
class ImageBuilder extends Maintenance
{

    /**
     * @var Database
     */
    protected $dbw;

    public function __construct()
    {
        parent::__construct();

        global $wgUpdateCompatibleMetadata;
        // make sure to update old, but compatible img_metadata fields.
        $wgUpdateCompatibleMetadata = true;

        $this->addDescription('Script to update image metadata records');

        $this->addOption('missing', 'Check for files without associated database record');
        $this->addOption('dry-run', 'Only report, don\'t update the database');
    }

    public function execute()
    {
        $this->dbw = $this->getDB(DB_MASTER);
        $this->dryrun = $this->hasOption('dry-run');
        if ($this->dryrun) {
            $GLOBALS['wgReadOnly'] = 'Dry run mode, image upgrades are suppressed';
        }

        if ($this->hasOption('missing')) {
            $this->crawlMissing();
        } else {
            $this->build();
        }
    }

    /**
     * @return FileRepo
     */
    public function getRepo()
    {
        if (!isset($this->repo)) {
            $this->repo = RepoGroup::singleton()->getLocalRepo();
        }

        return $this->repo;
    }

    public function build()
    {
        $this->buildImage();
        $this->buildOldImage();
    }

    public function init($count, $table)
    {
        $this->processed = 0;
        $this->updated = 0;
        $this->count = $count;
        $this->startTime = microtime(true);
        $this->table = $table;
    }

    public function progress($updated)
    {
        $this->updated += $updated;
        $this->processed++;
        if ($this->processed % 100 != 0) {
            return;
        }
        $portion = $this->processed / $this->count;
        $updateRate = $this->updated / $this->processed;

        $now = microtime(true);
        $delta = $now - $this->startTime;
        $estimatedTotalTime = $delta / $portion;
        $eta = $this->startTime + $estimatedTotalTime;
        $rate = $this->processed / $delta;

        $this->output(sprintf(
            "%s: %6.2f%% done on %s; ETA %s [%d/%d] %.2f/sec <%.2f%% updated>\n",
            wfTimestamp(TS_DB, intval($now)),
            $portion * 100.0,
            $this->table,
            wfTimestamp(TS_DB, intval($eta)),
            $this->processed,
            $this->count,
            $rate,
            $updateRate * 100.0
        ));
        flush();
    }

    public function buildTable($table, $key, $callback)
    {
        $count = $this->dbw->selectField($table, 'count(*)', '', __METHOD__);
        $this->init($count, $table);
        $this->output("Processing $table...\n");

        $result = $this->getDB(DB_REPLICA)->select($table, '*', [], __METHOD__);

        foreach ($result as $row) {
            $update = call_user_func($callback, $row, null);
            if ($update) {
                $this->progress(1);
            } else {
                $this->progress(0);
            }
        }
        $this->output("Finished $table... $this->updated of $this->processed rows updated\n");
    }

    public function buildImage()
    {
        $callback = [ $this, 'imageCallback' ];
        $this->buildTable('image', 'img_name', $callback);
    }

    public function imageCallback($row, $copy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function buildOldImage()
    {
        $this->buildTable('oldimage', 'oi_archive_name', [ $this, 'oldimageCallback' ]);
    }

    public function oldimageCallback($row, $copy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function crawlMissing()
    {
        $this->getRepo()->enumFiles([ $this, 'checkMissingImage' ]);
    }

    public function checkMissingImage($fullpath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addMissingImage($filename, $fullpath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$maintClass = 'ImageBuilder';
require_once RUN_MAINTENANCE_IF_MAIN;
