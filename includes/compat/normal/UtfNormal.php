<?php
/**
 * Unicode normalization routines
 *
 * Copyright © 2004 Brion Vibber <brion@pobox.com>
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
 * @ingroup UtfNormal
 */

/**
 * @defgroup UtfNormal UtfNormal
 */

use UtfNormal\Validator;

/**
 * Unicode normalization routines for working with UTF-8 strings.
 * Currently assumes that input strings are valid UTF-8!
 *
 * Not as fast as I'd like, but should be usable for most purposes.
 * UtfNormal::toNFC() will bail early if given ASCII text or text
 * it can quickly determine is already normalized.
 *
 * All functions can be called static.
 *
 * See description of forms at http://www.unicode.org/reports/tr15/
 *
 * @deprecated since 1.25, use UtfNormal\Validator directly
 * @ingroup UtfNormal
 */
class UtfNormal
{
    /**
     * The ultimate convenience function! Clean up invalid UTF-8 sequences,
     * and convert to normal form C, canonical composition.
     *
     * Fast return for pure ASCII strings; some lesser optimizations for
     * strings containing only known-good characters. Not as fast as toNFC().
     *
     * @param string $string a UTF-8 string
     * @return string a clean, shiny, normalized UTF-8 string
     */
    public static function cleanUp($string)
    {
        return Validator::cleanUp($string);
    }

    /**
     * Convert a UTF-8 string to normal form C, canonical composition.
     * Fast return for pure ASCII strings; some lesser optimizations for
     * strings containing only known-good characters.
     *
     * @param string $string a valid UTF-8 string. Input is not validated.
     * @return string a UTF-8 string in normal form C
     */
    public static function toNFC($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert a UTF-8 string to normal form D, canonical decomposition.
     * Fast return for pure ASCII strings.
     *
     * @param string $string a valid UTF-8 string. Input is not validated.
     * @return string a UTF-8 string in normal form D
     */
    public static function toNFD($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert a UTF-8 string to normal form KC, compatibility composition.
     * This may cause irreversible information loss, use judiciously.
     * Fast return for pure ASCII strings.
     *
     * @param string $string a valid UTF-8 string. Input is not validated.
     * @return string a UTF-8 string in normal form KC
     */
    public static function toNFKC($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert a UTF-8 string to normal form KD, compatibility decomposition.
     * This may cause irreversible information loss, use judiciously.
     * Fast return for pure ASCII strings.
     *
     * @param string $string a valid UTF-8 string. Input is not validated.
     * @return string a UTF-8 string in normal form KD
     */
    public static function toNFKD($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns true if the string is _definitely_ in NFC.
     * Returns false if not or uncertain.
     * @param string $string a valid UTF-8 string. Input is not validated.
     * @return bool
     */
    public static function quickIsNFC($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns true if the string is _definitely_ in NFC.
     * Returns false if not or uncertain.
     * @param string $string a UTF-8 string, altered on output to be valid UTF-8 safe for XML.
     * @return bool
     */
    public static function quickIsNFCVerify(&$string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
