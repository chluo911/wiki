<?php
/**
 * Kazakh (Қазақша) specific code.
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
 * @ingroup Language
 */

/**
 * Kazakh (Қазақша)
 *
 * @ingroup Language
 */
// @codingStandardsIgnoreStart Ignore class name is not in camel caps format error
class LanguageKk_cyrl extends Language
{
    // @codingStandardsIgnoreEnd
    # Convert from the nominative form of a noun to some other case
    # Invoked with {{GRAMMAR:case|word}}
    /**
     * Cases: genitive, dative, accusative, locative, ablative, comitative + possessive forms
     *
     * @param string $word
     * @param string $case
     *
     * @return string
     */
    public function convertGrammarKk_cyrl($word, $case)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $word
     * @param string $case
     * @return string
     */
    public function convertGrammarKk_latn($word, $case)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $word
     * @param string $case
     * @return string
     */
    public function convertGrammarKk_arab($word, $case)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $word
     * @param array $allVowels
     * @return array
     */
    public function lastLetter($word, $allVowels)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Avoid grouping whole numbers between 0 to 9999
     *
     * @param string $_
     *
     * @return string
     */
    public function commafy($_)
    {
        if (!preg_match('/^\d{1,4}$/', $_)) {
            return strrev((string)preg_replace('/(\d{3})(?=\d)(?!\d*\.)/', '$1,', strrev($_)));
        } else {
            return $_;
        }
    }
}
