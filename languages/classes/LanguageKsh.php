<?php
/**
 * Ripuarian (Ripoarėsh) specific code.
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
 * @author Purodha Blissenbach
 * @ingroup Language
 */

/**
 * Ripuarian (Ripoarėsh)
 *
 * @ingroup Language
 */
class LanguageKsh extends Language
{
    private static $familygender = [
        // Do not add male wiki families, since that's the default.
        // No need add neuter wikis having names ending in -wiki.
            'wikipedia' => 'f',
            'wikiversity' => 'f',
            'wiktionary' => 'n',
            'wikibooks' => 'n',
            'wikiquote' => 'n',
            'wikisource' => 'n',
            'wikitravel' => 'n',
            'wikia' => 'f',
            'translatewiki.net' => 'n',
        ];

    /**
     * Convert from the nominative form of a noun to other cases.
     * Invoked with {{GRAMMAR:case|word}} inside messages.
     *
     * case is a sequence of words, each of which is case insensitive.
     * Between words, there must be at least one space character.
     * Only the 1st character of each word is considered.
     * Word order is irrelevant.
     *
     * Possible values specifying the grammatical case are:
     *	1, Nominative
     *	2, Genitive
     *	3, Dative
     *	4, Accusative, -omitted-
     *
     * Possible values specifying the article type are:
     *	Betoont               focussed or stressed article
     *	-omitted-             unstressed or unfocussed article
     *
     * Possible values for the type of genitive are:
     *	Sing, Iehr            prepositioned genitive = possessive dative
     *	Vun, Fon, -omitted-   postpositioned genitive
     *	                               = preposition "vun" with dative
     *
     * Values of case overrides & prepositions, in the order of preceedence:
     *	Sing, Iehr            possessive dative = prepositioned genitive
     *	Vun, Fon              preposition "vun" with dative
     *	                                     = postpositioned genitive
     *	En, em                preposition "en" with dative
     *
     * Values for object gender specifiers of the possessive dative, or
     * prepositioned genitive, evaluated with "Sing, Iehr" of above only:
     *	Male                  a singular male object follows
     *	-omitted-             a non-male or plural object follows
     *
     * We currently handle definite articles of the singular only.
     * There is a full set of test cases at:
     * http://translatewiki.net/wiki/Portal:Ksh#GRAMMAR_Pr%C3%B6%C3%B6fe
     * Contents of the leftmost table column can be copied and pasted as
     * "case" values.
     *
     * @param string $word
     * @param string $case
     *
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

    /**
     * Handle cases of (1, other, 0) or (1, other)
     *
     * @param int $count
     * @param array $forms
     *
     * @return string
     */
    public function convertPlural($count, $forms)
    {
        $forms = $this->handleExplicitPluralForms($count, $forms);
        if (is_string($forms)) {
            return $forms;
        }
        if (!count($forms)) {
            return '';
        }
        $forms = $this->preConvertPlural($forms, 3);

        if ($count == 1) {
            return $forms[0];
        } elseif ($count == 0) {
            return $forms[2];
        } else {
            return $forms[1];
        }
    }
}
