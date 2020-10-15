<?php
/**
 * Ossetian (Ирон) specific code.
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
 * @author Soslan Khubulov
 * @ingroup Language
 */

/**
 * Ossetian (Ирон)
 *
 * @ingroup Language
 */
class LanguageOs extends Language
{

    /**
     * Convert from the nominative form of a noun to other cases
     * Invoked with {{grammar:case|word}}
     *
     * Depending on word there are four different ways of converting to other cases.
     * 1) Word consist of not cyrillic letters or is an abbreviation.
     * 		Then result word is: word + hyphen + case ending.
     *
     * 2) Word consist of cyrillic letters.
     * 2.1) Word is in plural.
     * 		Then result word is: word - last letter + case ending. Ending of allative case here is 'æм'.
     *
     * 2.2) Word is in singular.
     * 2.2.1) Word ends on consonant.
     * 		Then result word is: word + case ending.
     *
     * 2.2.2) Word ends on vowel.
     * 		Then result word is: word + 'й' + case ending for cases != allative or comitative
     * 		and word + case ending for allative or comitative. Ending of allative case here is 'æ'.
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
}
