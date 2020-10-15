<?php
/**
 * Clean up broken page links when somebody turns on $wgCapitalLinks.
 *
 * Usage: php cleanupCaps.php [--dry-run]
 * Options:
 *   --dry-run  don't actually try moving them
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

require_once __DIR__ . '/cleanupTable.inc';

/**
 * Maintenance script to clean up broken page links when somebody turns
 * on or off $wgCapitalLinks.
 *
 * @ingroup Maintenance
 */
class CapsCleanup extends TableCleanup
{
    private $user;
    private $namespace;

    public function __construct()
    {
        parent::__construct();
        $this->addDescription('Script to cleanup capitalization');
        $this->addOption('namespace', 'Namespace number to run caps cleanup on', false, true);
    }

    public function execute()
    {
        $this->user = User::newSystemUser('Conversion script', [ 'steal' => true ]);

        $this->namespace = intval($this->getOption('namespace', 0));

        if (MWNamespace::isCapitalized($this->namespace)) {
            $this->output("Will be moving pages to first letter capitalized titles");
            $callback = 'processRowToUppercase';
        } else {
            $this->output("Will be moving pages to first letter lowercase titles");
            $callback = 'processRowToLowercase';
        }

        $this->dryrun = $this->hasOption('dry-run');

        $this->runTable([
            'table' => 'page',
            'conds' => [ 'page_namespace' => $this->namespace ],
            'index' => 'page_id',
            'callback' => $callback ]);
    }

    protected function processRowToUppercase($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function processRowToLowercase($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Title $current
     * @param Title $target
     * @param string $reason
     * @param bool $createRedirect
     * @return bool Success
     */
    private function movePage(Title $current, Title $target, $reason, $createRedirect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$maintClass = "CapsCleanup";
require_once RUN_MAINTENANCE_IF_MAIN;
