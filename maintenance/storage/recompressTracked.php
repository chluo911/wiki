<?php
/**
 * Moves blobs indexed by trackBlobs.php to a specified list of destination
 * clusters, and recompresses them in the process.
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
 * @ingroup Maintenance ExternalStorage
 */

use MediaWiki\Logger\LegacyLogger;
use MediaWiki\MediaWikiServices;

$optionsWithArgs = RecompressTracked::getOptionsWithArgs();
require __DIR__ . '/../commandLine.inc';

if (count($args) < 1) {
    echo "Usage: php recompressTracked.php [options] <cluster> [... <cluster>...]
Moves blobs indexed by trackBlobs.php to a specified list of destination clusters,
and recompresses them in the process. Restartable.

Options:
	--procs <procs>       Set the number of child processes (default 1)
	--copy-only           Copy only, do not update the text table. Restart
	                      without this option to complete.
	--debug-log <file>    Log debugging data to the specified file
	--info-log <file>     Log progress messages to the specified file
	--critical-log <file> Log error messages to the specified file
";
    exit(1);
}

$job = RecompressTracked::newFromCommandLine($args, $options);
$job->execute();

/**
 * Maintenance script that moves blobs indexed by trackBlobs.php to a specified
 * list of destination clusters, and recompresses them in the process.
 *
 * @ingroup Maintenance ExternalStorage
 */
class RecompressTracked
{
    public $destClusters;
    public $batchSize = 1000;
    public $orphanBatchSize = 1000;
    public $reportingInterval = 10;
    public $numProcs = 1;
    public $numBatches = 0;
    public $pageBlobClass;
    public $orphanBlobClass;
    public $replicaPipes;
    public $replicaProcs;
    public $prevReplicaId;
    public $copyOnly = false;
    public $isChild = false;
    public $replicaId = false;
    public $noCount = false;
    public $debugLog;
    public $infoLog;
    public $criticalLog;
    public $store;

    private static $optionsWithArgs = [
        'procs',
        'replica-id',
        'debug-log',
        'info-log',
        'critical-log'
    ];

    private static $cmdLineOptionMap = [
        'no-count' => 'noCount',
        'procs' => 'numProcs',
        'copy-only' => 'copyOnly',
        'child' => 'isChild',
        'replica-id' => 'replicaId',
        'debug-log' => 'debugLog',
        'info-log' => 'infoLog',
        'critical-log' => 'criticalLog',
    ];

    public static function getOptionsWithArgs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function newFromCommandLine($args, $options)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function __construct($options)
    {
        foreach ($options as $name => $value) {
            $this->$name = $value;
        }
        $this->store = new ExternalStoreDB;
        if (!$this->isChild) {
            $GLOBALS['wgDebugLogPrefix'] = "RCT M: ";
        } elseif ($this->replicaId !== false) {
            $GLOBALS['wgDebugLogPrefix'] = "RCT {$this->replicaId}: ";
        }
        $this->pageBlobClass = function_exists('xdiff_string_bdiff') ?
            'DiffHistoryBlob' : 'ConcatenatedGzipHistoryBlob';
        $this->orphanBlobClass = 'ConcatenatedGzipHistoryBlob';
    }

    public function debug($msg)
    {
        wfDebug("$msg\n");
        if ($this->debugLog) {
            $this->logToFile($msg, $this->debugLog);
        }
    }

    public function info($msg)
    {
        echo "$msg\n";
        if ($this->infoLog) {
            $this->logToFile($msg, $this->infoLog);
        }
    }

    public function critical($msg)
    {
        echo "$msg\n";
        if ($this->criticalLog) {
            $this->logToFile($msg, $this->criticalLog);
        }
    }

    public function logToFile($msg, $file)
    {
        $header = '[' . date('d\TH:i:s') . '] ' . wfHostname() . ' ' . posix_getpid();
        if ($this->replicaId !== false) {
            $header .= "({$this->replicaId})";
        }
        $header .= ' ' . wfWikiID();
        LegacyLogger::emit(sprintf("%-50s %s\n", $header, $msg), $file);
    }

    /**
     * Wait until the selected replica DB has caught up to the master.
     * This allows us to use the replica DB for things that were committed in a
     * previous part of this batch process.
     */
    public function syncDBs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Execute parent or child depending on the isChild option
     */
    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Execute the parent process
     */
    public function executeParent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Make sure the tracking table exists and isn't empty
     * @return bool
     */
    public function checkTrackingTable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Start the worker processes.
     * These processes will listen on stdin for commands.
     * This necessary because text recompression is slow: loading, compressing and
     * writing are all slow.
     */
    public function startReplicaProcs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gracefully terminate the child processes
     */
    public function killReplicaProcs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Dispatch a command to the next available replica DB.
     * This may block until a replica DB finishes its work and becomes available.
     */
    public function dispatch(/*...*/)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Dispatch a command to a specified replica DB
     * @param int $replicaId
     * @param array|string $args
     */
    public function dispatchToReplica($replicaId, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Move all tracked pages to the new clusters
     */
    public function doAllPages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Display a progress report
     * @param string $label
     * @param int $current
     * @param int $end
     */
    public function report($label, $current, $end)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Move all orphan text to the new clusters
     */
    public function doAllOrphans()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Main entry point for worker processes
     */
    public function executeChild()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Move tracked text in a given page
     *
     * @param int $pageId
     */
    public function doPage($pageId)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Atomic move operation.
     *
     * Write the new URL to the text table and set the bt_moved flag.
     *
     * This is done in a single transaction to provide restartable behavior
     * without data loss.
     *
     * The transaction is kept short to reduce locking.
     *
     * @param int $textId
     * @param string $url
     */
    public function moveTextRow($textId, $url)
    {
        if ($this->copyOnly) {
            $this->critical("Internal error: can't call moveTextRow() in --copy-only mode");
            exit(1);
        }
        $dbw = wfGetDB(DB_MASTER);
        $dbw->begin(__METHOD__);
        $dbw->update(
            'text',
            [ // set
                'old_text' => $url,
                'old_flags' => 'external,utf-8',
            ],
            [ // where
                'old_id' => $textId
            ],
            __METHOD__
        );
        $dbw->update(
            'blob_tracking',
            [ 'bt_moved' => 1 ],
            [ 'bt_text_id' => $textId ],
            __METHOD__
        );
        $dbw->commit(__METHOD__);
    }

    /**
     * Moves are done in two phases: bt_new_url and then bt_moved.
     *  - bt_new_url indicates that the text has been copied to the new cluster.
     *  - bt_moved indicates that the text table has been updated.
     *
     * This function completes any moves that only have done bt_new_url. This
     * can happen when the script is interrupted, or when --copy-only is used.
     *
     * @param array $conds
     */
    public function finishIncompleteMoves($conds)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the name of the next target cluster
     * @return string
     */
    public function getTargetCluster()
    {
        $cluster = next($this->destClusters);
        if ($cluster === false) {
            $cluster = reset($this->destClusters);
        }

        return $cluster;
    }

    /**
     * Gets a DB master connection for the given external cluster name
     * @param string $cluster
     * @return Database
     */
    public function getExtDB($cluster)
    {
        $lb = wfGetLBFactory()->getExternalLB($cluster);

        return $lb->getConnection(DB_MASTER);
    }

    /**
     * Move an orphan text_id to the new cluster
     *
     * @param array $textIds
     */
    public function doOrphanList($textIds)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Class to represent a recompression operation for a single CGZ blob
 */
class CgzCopyTransaction
{
    /** @var RecompressTracked */
    public $parent;
    public $blobClass;
    /** @var ConcatenatedGzipHistoryBlob */
    public $cgz;
    public $referrers;

    /**
     * Create a transaction from a RecompressTracked object
     * @param RecompressTracked $parent
     * @param string $blobClass
     */
    public function __construct($parent, $blobClass)
    {
        $this->blobClass = $blobClass;
        $this->cgz = false;
        $this->texts = [];
        $this->parent = $parent;
    }

    /**
     * Add text.
     * Returns false if it's ready to commit.
     * @param string $text
     * @param int $textId
     * @return bool
     */
    public function addItem($text, $textId)
    {
        if (!$this->cgz) {
            $class = $this->blobClass;
            $this->cgz = new $class;
        }
        $hash = $this->cgz->addItem($text);
        $this->referrers[$textId] = $hash;
        $this->texts[$textId] = $text;

        return $this->cgz->isHappy();
    }

    public function getSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Recompress text after some aberrant modification
     */
    public function recompress()
    {
        $class = $this->blobClass;
        $this->cgz = new $class;
        $this->referrers = [];
        foreach ($this->texts as $textId => $text) {
            $hash = $this->cgz->addItem($text);
            $this->referrers[$textId] = $hash;
        }
    }

    /**
     * Commit the blob.
     * Does nothing if no text items have been added.
     * May skip the move if --copy-only is set.
     */
    public function commit()
    {
        $originalCount = count($this->texts);
        if (!$originalCount) {
            return;
        }

        /* Check to see if the target text_ids have been moved already.
         *
         * We originally read from the replica DB, so this can happen when a single
         * text_id is shared between multiple pages. It's rare, but possible
         * if a delete/move/undelete cycle splits up a null edit.
         *
         * We do a locking read to prevent closer-run race conditions.
         */
        $dbw = wfGetDB(DB_MASTER);
        $dbw->begin(__METHOD__);
        $res = $dbw->select(
            'blob_tracking',
            [ 'bt_text_id', 'bt_moved' ],
            [ 'bt_text_id' => array_keys($this->referrers) ],
            __METHOD__,
            [ 'FOR UPDATE' ]
        );
        $dirty = false;
        foreach ($res as $row) {
            if ($row->bt_moved) {
                # This row has already been moved, remove it
                $this->parent->debug("TRX: conflict detected in old_id={$row->bt_text_id}");
                unset($this->texts[$row->bt_text_id]);
                $dirty = true;
            }
        }

        // Recompress the blob if necessary
        if ($dirty) {
            if (!count($this->texts)) {
                // All have been moved already
                if ($originalCount > 1) {
                    // This is suspcious, make noise
                    $this->parent->critical(
                        "Warning: concurrent operation detected, are there two conflicting " .
                        "processes running, doing the same job?"
                    );
                }

                return;
            }
            $this->recompress();
        }

        // Insert the data into the destination cluster
        $targetCluster = $this->parent->getTargetCluster();
        $store = $this->parent->store;
        $targetDB = $store->getMaster($targetCluster);
        $targetDB->clearFlag(DBO_TRX); // we manage the transactions
        $targetDB->begin(__METHOD__);
        $baseUrl = $this->parent->store->store($targetCluster, serialize($this->cgz));

        // Write the new URLs to the blob_tracking table
        foreach ($this->referrers as $textId => $hash) {
            $url = $baseUrl . '/' . $hash;
            $dbw->update(
                'blob_tracking',
                [ 'bt_new_url' => $url ],
                [
                    'bt_text_id' => $textId,
                    'bt_moved' => 0, # Check for concurrent conflicting update
                ],
                __METHOD__
            );
        }

        $targetDB->commit(__METHOD__);
        // Critical section here: interruption at this point causes blob duplication
        // Reversing the order of the commits would cause data loss instead
        $dbw->commit(__METHOD__);

        // Write the new URLs to the text table and set the moved flag
        if (!$this->parent->copyOnly) {
            foreach ($this->referrers as $textId => $hash) {
                $url = $baseUrl . '/' . $hash;
                $this->parent->moveTextRow($textId, $url);
            }
        }
    }
}
