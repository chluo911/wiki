<?php
/**
 * MediaWiki page data importer.
 *
 * Copyright © 2003,2005 Brion Vibber <brion@pobox.com>
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
 * @ingroup SpecialPage
 */

/**
 * This is a horrible hack used to keep source compatibility.
 * @ingroup SpecialPage
 */
class UploadSourceAdapter
{
    /** @var array */
    public static $sourceRegistrations = [];

    /** @var string */
    private $mSource;

    /** @var string */
    private $mBuffer;

    /** @var int */
    private $mPosition;

    /**
     * @param ImportSource $source
     * @return string
     */
    public static function registerSource(ImportSource $source)
    {
        $id = wfRandomString();

        self::$sourceRegistrations[$id] = $source;

        return $id;
    }

    /**
     * @param string $path
     * @param string $mode
     * @param array $options
     * @param string $opened_path
     * @return bool
     */
    public function stream_open($path, $mode, $options, &$opened_path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param int $count
     * @return string
     */
    public function stream_read($count)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $data
     * @return bool
     */
    public function stream_write($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return mixed
     */
    public function stream_tell()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function stream_eof()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    public function url_stat()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
