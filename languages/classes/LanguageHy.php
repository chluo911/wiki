<?php
/**
 * Armenian (Հայերեն) specific code.
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
 * @author Ruben Vardanyan (Me@RubenVardanyan.com)
 * @ingroup Language
 */

/**
 * Armenian (Հայերեն)
 *
 * @ingroup Language
 */
class LanguageHy extends Language
{

    /**
     * Convert from the nominative form of a noun to some other case
     * Invoked with {{grammar:case|word}}
     *
     * @param string $word
     * @param string $case
     * @return string
     */
    public function convertGrammar($word, $case)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Armenian numeric format is "12 345,67" but "1234,56"
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
