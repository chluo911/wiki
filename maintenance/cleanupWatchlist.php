<?php
/**
 * Remove broken, unparseable titles in the watchlist table.
 *
 * Usage: php cleanupWatchlist.php [--fix]
 * Options:
 *   --fix  Actually remove entries; without will only report.
 *
 * Copyright © 2005,2006 Brion Vibber <brion@pobox.com>
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

require_once __DIR__ . '/cleanupTable.inc';

/**
 * Maintenance script to remove broken, unparseable titles in the watchlist table.
 *
 * @ingroup Maintenance
 */
class WatchlistCleanup extends TableCleanup
{
    protected $defaultParams = [
        'table' => 'watchlist',
        'index' => [ 'wl_user', 'wl_namespace', 'wl_title' ],
        'conds' => [],
        'callback' => 'processRow'
    ];

    public function __construct()
    {
        parent::__construct();
        $this->addDescription('Script to remove broken, unparseable titles in the Watchlist');
        $this->addOption('fix', 'Actually remove entries; without will only report.');
    }

    public function execute()
    {
        if (!$this->hasOption('fix')) {
            $this->output("Dry run only: use --fix to enable updates\n");
        }
        parent::execute();
    }

    protected function processRow($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function removeWatch($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$maintClass = "WatchlistCleanup";
require_once RUN_MAINTENANCE_IF_MAIN;
