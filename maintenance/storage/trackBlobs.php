<?php
/**
 * Adds blobs from a given external storage cluster to the blob_tracking table.
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
 * @see wfWaitForSlaves()
 */

require __DIR__ . '/../commandLine.inc';

if (count($args) < 1) {
    echo "Usage: php trackBlobs.php <cluster> [... <cluster>]\n";
    echo "Adds blobs from a given ES cluster to the blob_tracking table\n";
    echo "Automatically deletes the tracking table and starts from the start again when restarted.\n";

    exit(1);
}
$tracker = new TrackBlobs($args);
$tracker->run();
echo "All done.\n";

class TrackBlobs
{
    public $clusters;
    public $textClause;
    public $doBlobOrphans;
    public $trackedBlobs = [];

    public $batchSize = 1000;
    public $reportingInterval = 10;

    public function __construct($clusters)
    {
        $this->clusters = $clusters;
        if (extension_loaded('gmp')) {
            $this->doBlobOrphans = true;
            foreach ($clusters as $cluster) {
                $this->trackedBlobs[$cluster] = gmp_init(0);
            }
        } else {
            echo "Warning: the gmp extension is needed to find orphan blobs\n";
        }
    }

    public function run()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function checkIntegrity()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function initTrackingTable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getTextClause()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function interpretPointer($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *  Scan the revision table for rows stored in the specified clusters
     */
    public function trackRevisions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Scan the text table for orphan text
     * Orphan text here does not imply DB corruption -- deleted text tracked by the
     * archive table counts as orphan for our purposes.
     */
    public function trackOrphanText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Scan the blobs table for rows not registered in blob_tracking (and thus not
     * registered in the text table).
     *
     * Orphan blobs are indicative of DB corruption. They are inaccessible and
     * should probably be deleted.
     */
    public function findOrphanBlobs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
