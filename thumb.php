<?php
/**
 * PHP script to stream out an image thumbnail.
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
 * @ingroup Media
 */

use MediaWiki\Logger\LoggerFactory;

define('MW_NO_OUTPUT_COMPRESSION', 1);
require __DIR__ . '/includes/WebStart.php';

// Don't use fancy MIME detection, just check the file extension for jpg/gif/png
$wgTrivialMimeDetection = true;

if (defined('THUMB_HANDLER')) {
    // Called from thumb_handler.php via 404; extract params from the URI...
    wfThumbHandle404();
} else {
    // Called directly, use $_GET params
    wfStreamThumb($_GET);
}

$mediawiki = new MediaWiki();
$mediawiki->doPostOutputShutdown('fast');

// --------------------------------------------------------------------------

/**
 * Handle a thumbnail request via thumbnail file URL
 *
 * @return void
 */
function wfThumbHandle404()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Stream a thumbnail specified by parameters
 *
 * @param array $params List of thumbnailing parameters. In addition to parameters
 *  passed to the MediaHandler, this may also includes the keys:
 *   f (for filename), archived (if archived file), temp (if temp file),
 *   w (alias for width), p (alias for page), r (ignored; historical),
 *   rel404 (path for render on 404 to verify hash path correct),
 *   thumbName (thumbnail name to potentially extract more parameters from
 *   e.g. 'lossy-page1-120px-Foo.tiff' would add page, lossy and width
 *   to the parameters)
 * @return void
 */
function wfStreamThumb(array $params)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Actually try to generate a new thumbnail
 *
 * @param File $file
 * @param array $params
 * @param string $thumbName
 * @param string $thumbPath
 * @return array (MediaTransformOutput|bool, string|bool error message HTML)
 */
function wfGenerateThumbnail(File $file, array $params, $thumbName, $thumbPath)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Convert pathinfo type parameter, into normal request parameters
 *
 * So for example, if the request was redirected from
 * /w/images/thumb/a/ab/Foo.png/120px-Foo.png. The $thumbRel parameter
 * of this function would be set to "a/ab/Foo.png/120px-Foo.png".
 * This method is responsible for turning that into an array
 * with the folowing keys:
 *  * f => the filename (Foo.png)
 *  * rel404 => the whole thing (a/ab/Foo.png/120px-Foo.png)
 *  * archived => 1 (If the request is for an archived thumb)
 *  * temp => 1 (If the file is in the "temporary" zone)
 *  * thumbName => the thumbnail name, including parameters (120px-Foo.png)
 *
 * Transform specific parameters are set later via wfExtractThumbParams().
 *
 * @param string $thumbRel Thumbnail path relative to the thumb zone
 * @return array|null Associative params array or null
 */
function wfExtractThumbRequestInfo($thumbRel)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Convert a thumbnail name (122px-foo.png) to parameters, using
 * file handler.
 *
 * @param File $file File object for file in question
 * @param array $params Array of parameters so far
 * @return array Parameters array with more parameters
 */
function wfExtractThumbParams($file, $params)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Output a thumbnail generation error message
 *
 * @param int $status
 * @param string $msgText Plain text (will be html escaped)
 * @return void
 */
function wfThumbErrorText($status, $msgText)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Output a thumbnail generation error message
 *
 * @param int $status
 * @param string $msgHtml HTML
 * @param string $msgText Short error description, for internal logging. Defaults to $msgHtml.
 *   Only used for HTTP 500 errors.
 * @param array $context Error context, for internal logging. Only used for HTTP 500 errors.
 * @return void
 */
function wfThumbError($status, $msgHtml, $msgText = null, $context = [])
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
