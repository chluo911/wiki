<?php
/**
 * Replication-safe online upgrade for log_id/log_deleted fields.
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
 * @ingroup MaintenanceArchive
 */

require __DIR__ . '/../commandLine.inc';

/**
 * Maintenance script that upgrade for log_id/log_deleted fields in a
 * replication-safe way.
 *
 * @ingroup Maintenance
 */
class UpdateLogging
{

    /**
     * @var Database
     */
    public $dbw;
    public $batchSize = 1000;
    public $minTs = false;

    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Copy all rows from $srcTable to $dstTable
     * @param string $srcTable
     * @param string $dstTable
     */
    public function sync($srcTable, $dstTable)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function copyExactMatch($srcTable, $dstTable, $copyPos)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$ul = new UpdateLogging;
$ul->execute();
