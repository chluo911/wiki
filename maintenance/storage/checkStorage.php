<?php
/**
 * Fsck for MediaWiki
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

if (!defined('MEDIAWIKI')) {
    $optionsWithoutArgs = [ 'fix' ];
    require_once __DIR__ . '/../commandLine.inc';

    $cs = new CheckStorage;
    $fix = isset($options['fix']);
    if (isset($args[0])) {
        $xml = $args[0];
    } else {
        $xml = false;
    }
    $cs->check($fix, $xml);
}

// ----------------------------------------------------------------------------------

/**
 * Maintenance script to do various checks on external storage.
 *
 * @fixme this should extend the base Maintenance class
 * @ingroup Maintenance ExternalStorage
 */
class CheckStorage
{
    const CONCAT_HEADER = 'O:27:"concatenatedgziphistoryblob"';
    public $oldIdMap;
    public $errors;
    public $dbStore = null;

    public $errorDescriptions = [
        'restore text' => 'Damaged text, need to be restored from a backup',
        'restore revision' => 'Damaged revision row, need to be restored from a backup',
        'unfixable' => 'Unexpected errors with no automated fixing method',
        'fixed' => 'Errors already fixed',
        'fixable' => 'Errors which would already be fixed if --fix was specified',
    ];

    public function check($fix = false, $xml = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function error($type, $msg, $ids)
    {
        if (is_array($ids) && count($ids) == 1) {
            $ids = reset($ids);
        }
        if (is_array($ids)) {
            $revIds = [];
            foreach ($ids as $id) {
                $revIds = array_merge($revIds, array_keys($this->oldIdMap, $id));
            }
            print "$msg in text rows " . implode(', ', $ids) .
                ", revisions " . implode(', ', $revIds) . "\n";
        } else {
            $id = $ids;
            $revIds = array_keys($this->oldIdMap, $id);
            if (count($revIds) == 1) {
                print "$msg in old_id $id, rev_id {$revIds[0]}\n";
            } else {
                print "$msg in old_id $id, revisions " . implode(', ', $revIds) . "\n";
            }
        }
        $this->errors[$type] = $this->errors[$type] + array_flip($revIds);
    }

    public function checkExternalConcatBlobs($externalConcatBlobs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function restoreText($revIds, $xml)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function importRevision(&$revision, &$importer)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
