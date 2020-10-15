<?php
/**
 * Image authorisation script
 *
 * To use this, see https://www.mediawiki.org/wiki/Manual:Image_Authorization
 *
 * - Set $wgUploadDirectory to a non-public directory (not web accessible)
 * - Set $wgUploadPath to point to this file
 *
 * Optional Parameters
 *
 * - Set $wgImgAuthDetails = true if you want the reason the access was denied messages to
 *       be displayed instead of just the 403 error (doesn't work on IE anyway),
 *       otherwise it will only appear in error logs
 *
 *  For security reasons, you usually don't want your user to know *why* access was denied,
 *  just that it was. If you want to change this, you can set $wgImgAuthDetails to 'true'
 *  in localsettings.php and it will give the user the reason why access was denied.
 *
 * Your server needs to support PATH_INFO; CGI-based configurations usually don't.
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

define('MW_NO_OUTPUT_COMPRESSION', 1);
require __DIR__ . '/includes/WebStart.php';

# Set action base paths so that WebRequest::getPathInfo()
# recognizes the "X" as the 'title' in ../img_auth.php/X urls.
$wgArticlePath = false; # Don't let a "/*" article path clober our action path
$wgActionPaths = [ "$wgUploadPath/" ];

wfImageAuthMain();

$mediawiki = new MediaWiki();
$mediawiki->doPostOutputShutdown('fast');

function wfImageAuthMain()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Issue a standard HTTP 403 Forbidden header ($msg1-a message index, not a message) and an
 * error message ($msg2, also a message index), (both required) then end the script
 * subsequent arguments to $msg2 will be passed as parameters only for replacing in $msg2
 * @param string $msg1
 * @param string $msg2
 */
function wfForbidden($msg1, $msg2)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
