<?php
/**
 * Finnish (Suomi) specific code.
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
 * @author Niklas Laxström
 * @ingroup Language
 */

/**
 * Finnish (Suomi)
 *
 * @ingroup Language
 */
class LanguageFi extends Language
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
     * @param string $str
     * @param User $user User object to use timezone from or null for $wgUser
     * @return string
     */
    public function translateBlockExpiry($str, User $user = null)
    {
        /*
            'ago', 'now', 'today', 'this', 'next',
            'first', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth',
                'tenth', 'eleventh', 'twelfth',
            'tomorrow', 'yesterday'

            $months = 'january:tammikuu,february:helmikuu,march:maaliskuu,april:huhtikuu,' .
                'may:toukokuu,june:kesäkuu,july:heinäkuu,august:elokuu,september:syyskuu,' .
                'october:lokakuu,november:marraskuu,december:joulukuu,' .
                'jan:tammikuu,feb:helmikuu,mar:maaliskuu,apr:huhtikuu,jun:kesäkuu,' .
                'jul:heinäkuu,aug:elokuu,sep:syyskuu,oct:lokakuu,nov:marraskuu,' .
                dec:joulukuu,sept:syyskuu';
        */
        $weekds = [
            'monday' => 'maanantai',
            'tuesday' => 'tiistai',
            'wednesday' => 'keskiviikko',
            'thursday' => 'torstai',
            'friday' => 'perjantai',
            'saturday' => 'lauantai',
            'sunday' => 'sunnuntai',
            'mon' => 'ma',
            'tue' => 'ti',
            'tues' => 'ti',
            'wed' => 'ke',
            'wednes' => 'ke',
            'thu' => 'to',
            'thur' => 'to',
            'thurs' => 'to',
            'fri' => 'pe',
            'sat' => 'la',
            'sun' => 'su',
            'next' => 'seuraava',
            'tomorrow' => 'huomenna',
            'ago' => 'sitten',
            'seconds' => 'sekuntia',
            'second' => 'sekunti',
            'secs' => 's',
            'sec' => 's',
            'minutes' => 'minuuttia',
            'minute' => 'minuutti',
            'mins' => 'min',
            'min' => 'min',
            'days' => 'päivää',
            'day' => 'päivä',
            'hours' => 'tuntia',
            'hour' => 'tunti',
            'weeks' => 'viikkoa',
            'week' => 'viikko',
            'fortnights' => 'tuplaviikkoa',
            'fortnight' => 'tuplaviikko',
            'months' => 'kuukautta',
            'month' => 'kuukausi',
            'years' => 'vuotta',
            'year' => 'vuosi',
            'infinite' => 'ikuisesti',
            'indefinite' => 'ikuisesti'
        ];

        $final = '';
        $tokens = explode(' ', $str);
        foreach ($tokens as $item) {
            if (!is_numeric($item)) {
                if (count(explode('-', $item)) == 3 && strlen($item) == 10) {
                    list($yyyy, $mm, $dd) = explode('-', $item);
                    $final .= ' ' . $this->date("{$yyyy}{$mm}{$dd}000000");
                    continue;
                }
                if (isset($weekds[$item])) {
                    $final .= ' ' . $weekds[$item];
                    continue;
                }
            }

            $final .= ' ' . $item;
        }

        return htmlspecialchars(trim($final));
    }
}
