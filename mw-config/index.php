<?php
/**
 * New version of MediaWiki web-based config/installation
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
 */

// Bail on old versions of PHP, or if composer has not been run yet to install
// dependencies. Using dirname( __FILE__ ) here because __DIR__ is PHP5.3+.
// @codingStandardsIgnoreStart MediaWiki.Usage.DirUsage.FunctionFound
require_once dirname(__FILE__) . '/../includes/PHPVersionCheck.php';
// @codingStandardsIgnoreEnd
wfEntryPointCheck('mw-config/index.php');

define('MW_CONFIG_CALLBACK', 'Installer::overrideConfig');
define('MEDIAWIKI_INSTALL', true);

// Resolve relative to regular MediaWiki root
// instead of mw-config subdirectory.
chdir(dirname(__DIR__));
require dirname(__DIR__) . '/includes/WebStart.php';

wfInstallerMain();

function wfInstallerMain()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
