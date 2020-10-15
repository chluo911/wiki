<?php
/**
 * Functions to be used with PHP's output buffer.
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

/**
 * Standard output handler for use with ob_start
 *
 * @param string $s
 *
 * @return string
 */
function wfOutputHandler($s)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Get the "file extension" that some client apps will estimate from
 * the currently-requested URL.
 * This isn't on WebRequest because we need it when things aren't initialized
 * @private
 *
 * @return string
 */
function wfRequestExtension()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Handler that compresses data with gzip if allowed by the Accept header.
 * Unlike ob_gzhandler, it works for HEAD requests too.
 *
 * @param string $s
 *
 * @return string
 */
function wfGzipHandler($s)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Mangle flash policy tags which open up the site to XSS attacks.
 *
 * @param string $s
 *
 * @return string
 */
function wfMangleFlashPolicy($s)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Add a Content-Length header if possible. This makes it cooperate with CDN better.
 *
 * @param int $length
 */
function wfDoContentLength($length)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Replace the output with an error if the HTML is not valid
 *
 * @param string $s
 *
 * @return string
 */
function wfHtmlValidationHandler($s)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
