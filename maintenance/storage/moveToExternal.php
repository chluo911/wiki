<?php
/**
 * Move revision's text to external storage
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

define('REPORTING_INTERVAL', 1);

if (!defined('MEDIAWIKI')) {
    $optionsWithArgs = [ 'e', 's' ];
    require_once __DIR__ . '/../commandLine.inc';
    require_once 'resolveStubs.php';

    $fname = 'moveToExternal';

    if (!isset($args[0])) {
        print "Usage: php moveToExternal.php [-s <startid>] [-e <endid>] <cluster>\n";
        exit;
    }

    $cluster = $args[0];
    $dbw = wfGetDB(DB_MASTER);

    if (isset($options['e'])) {
        $maxID = $options['e'];
    } else {
        $maxID = $dbw->selectField('text', 'MAX(old_id)', false, $fname);
    }
    $minID = isset($options['s']) ? $options['s'] : 1;

    moveToExternal($cluster, $maxID, $minID);
}

function moveToExternal($cluster, $maxID, $minID = 1)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
