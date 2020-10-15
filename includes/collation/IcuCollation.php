<?php
/**
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
 * @since 1.16.3
 */
class IcuCollation extends Collation
{
    const FIRST_LETTER_VERSION = 2;

    /** @var Collator */
    private $primaryCollator;

    /** @var Collator */
    private $mainCollator;

    /** @var string */
    private $locale;

    /** @var Language */
    protected $digitTransformLanguage;

    /** @var boolean */
    private $useNumericCollation = false;

    /** @var array */
    private $firstLetterData;

    /**
     * Unified CJK blocks.
     *
     * The same definition of a CJK block must be used for both Collation and
     * generateCollationData.php. These blocks are omitted from the first
     * letter data, as an optimisation measure and because the default UCA table
     * is pretty useless for sorting Chinese text anyway. Japanese and Korean
     * blocks are not included here, because they are smaller and more useful.
     */
    private static $cjkBlocks = [
        [ 0x2E80, 0x2EFF ], // CJK Radicals Supplement
        [ 0x2F00, 0x2FDF ], // Kangxi Radicals
        [ 0x2FF0, 0x2FFF ], // Ideographic Description Characters
        [ 0x3000, 0x303F ], // CJK Symbols and Punctuation
        [ 0x31C0, 0x31EF ], // CJK Strokes
        [ 0x3200, 0x32FF ], // Enclosed CJK Letters and Months
        [ 0x3300, 0x33FF ], // CJK Compatibility
        [ 0x3400, 0x4DBF ], // CJK Unified Ideographs Extension A
        [ 0x4E00, 0x9FFF ], // CJK Unified Ideographs
        [ 0xF900, 0xFAFF ], // CJK Compatibility Ideographs
        [ 0xFE30, 0xFE4F ], // CJK Compatibility Forms
        [ 0x20000, 0x2A6DF ], // CJK Unified Ideographs Extension B
        [ 0x2A700, 0x2B73F ], // CJK Unified Ideographs Extension C
        [ 0x2B740, 0x2B81F ], // CJK Unified Ideographs Extension D
        [ 0x2F800, 0x2FA1F ], // CJK Compatibility Ideographs Supplement
    ];

    /**
     * Additional characters (or character groups) to be considered separate
     * letters for given languages, or to be removed from the list of such
     * letters (denoted by keys starting with '-').
     *
     * These are additions to (or subtractions from) the data stored in the
     * first-letters-root.ser file (which among others includes full basic latin,
     * cyrillic and greek alphabets).
     *
     * "Separate letter" is a letter that would have a separate heading/section
     * for it in a dictionary or a phone book in this language. This data isn't
     * used for sorting (the ICU library handles that), only for deciding which
     * characters (or character groups) to use as headings.
     *
     * Initially generated based on the primary level of Unicode collation
     * tailorings available at http://developer.mimer.com/charts/tailorings.htm ,
     * later modified.
     *
     * Empty arrays are intended; this signifies that the data for the language is
     * available and that there are, in fact, no additional letters to consider.
     */
    private static $tailoringFirstLetters = [
        // Verified by native speakers
        'be' => [ "Ё" ],
        'be-tarask' => [ "Ё" ],
        'bs' => [ "Č", "Ć", "Dž", "Đ", "Lj", "Nj", "Š", "Ž" ],
        'cs' => [ "Č", "Ch", "Ř", "Š", "Ž" ],
        'cy' => [ "Ch", "Dd", "Ff", "Ng", "Ll", "Ph", "Rh", "Th" ],
        'en' => [],
        'fa' => [
            // RTL, let's put each letter on a new line
            "آ",
            "ء",
            "ه",
            "ا",
            "و"
        ],
        'fi' => [ "Å", "Ä", "Ö" ],
        'fr' => [],
        'hr' => [ "Č", "Ć", "Dž", "Đ", "Lj", "Nj", "Š", "Ž" ],
        'hsb' => [ "Č", "Dź", "Ě", "Ch", "Ł", "Ń", "Ř", "Š", "Ć", "Ž" ],
        'hu' => [ "Cs", "Dz", "Dzs", "Gy", "Ly", "Ny", "Ö", "Sz", "Ty", "Ü", "Zs" ],
        'is' => [ "Á", "Ð", "É", "Í", "Ó", "Ú", "Ý", "Þ", "Æ", "Ö", "Å" ],
        'it' => [],
        'lt' => [ "Č", "Š", "Ž" ],
        'lv' => [ "Č", "Ģ", "Ķ", "Ļ", "Ņ", "Š", "Ž" ],
        'mk' => [ "Ѓ", "Ќ" ],
        'nl' => [],
        'pl' => [ "Ą", "Ć", "Ę", "Ł", "Ń", "Ó", "Ś", "Ź", "Ż" ],
        'pt' => [],
        'ru' => [],
        'sk' => [ "Ä", "Č", "Ch", "Ô", "Š", "Ž" ],
        'sr' => [],
        'sv' => [ "Å", "Ä", "Ö" ],
        'sv@collation=standard' => [ "Å", "Ä", "Ö" ],
        'ta' => [
            "\xE0\xAE\x82", "�?", "க்�?", "க்", "ங்", "ச்", "ஞ்", "ட்", "ண்", "த்", "ந்",
            "ப்", "ம்", "ய்", "ர்", "ல்", "வ்", "ழ்", "ள்", "ற்", "ன்", "ஜ்", "ஶ்", "ஷ்",
            "ஸ்", "ஹ்", "க்ஷ்"
        ],
        'uk' => [ "Ґ", "Ь" ],
        'vi' => [ "Ă", "Â", "Đ", "Ê", "Ô", "Ơ", "Ư" ],
        // Not verified, but likely correct
        'af' => [],
        'ast' => [ "Ch", "Ll", "Ñ" ],
        'az' => [ "Ç", "Ə", "Ğ", "İ", "Ö", "Ş", "Ü" ],
        'bg' => [],
        'br' => [ "Ch", "C'h" ],
        'ca' => [],
        'co' => [],
        'da' => [ "Æ", "Ø", "Å" ],
        'de' => [],
        'dsb' => [ "Č", "Ć", "Dź", "Ě", "Ch", "Ł", "Ń", "Ŕ", "Š", "Ś", "Ž", "Ź" ],
        'el' => [],
        'eo' => [ "Ĉ", "Ĝ", "Ĥ", "Ĵ", "Ŝ", "Ŭ" ],
        'es' => [ "Ñ" ],
        'et' => [ "Š", "Ž", "Õ", "Ä", "Ö", "Ü", "W" ], // added W for CollationEt (xx-uca-et)
        'eu' => [ "Ñ" ],
        'fo' => [ "Á", "Ð", "Í", "Ó", "Ú", "Ý", "Æ", "Ø", "Å" ],
        'fur' => [ "À", "Á", "Â", "È", "Ì", "Ò", "Ù" ],
        'fy' => [],
        'ga' => [],
        'gd' => [],
        'gl' => [ "Ch", "Ll", "Ñ" ],
        'kk' => [ "Ү", "І" ],
        'kl' => [ "Æ", "Ø", "Å" ],
        'ku' => [ "Ç", "Ê", "Î", "Ş", "Û" ],
        'ky' => [ "Ё" ],
        'la' => [],
        'lb' => [],
        'mo' => [ "Ă", "Â", "Î", "Ş", "Ţ" ],
        'mt' => [ "Ċ", "Ġ", "Għ", "Ħ", "Ż" ],
        'no' => [ "Æ", "Ø", "Å" ],
        'oc' => [],
        'rm' => [],
        'ro' => [ "Ă", "Â", "Î", "Ş", "Ţ" ],
        'rup' => [ "Ă", "Â", "Î", "Ľ", "Ń", "Ş", "Ţ" ],
        'sco' => [],
        'sl' => [ "Č", "Š", "Ž" ],
        'smn' => [ "Á", "Č", "Đ", "Ŋ", "Š", "Ŧ", "Ž", "Æ", "Ø", "Å", "Ä", "Ö" ],
        'sq' => [ "Ç", "Dh", "Ë", "Gj", "Ll", "Nj", "Rr", "Sh", "Th", "Xh", "Zh" ],
        'tk' => [ "Ç", "Ä", "Ž", "Ň", "Ö", "Ş", "Ü", "Ý" ],
        'tl' => [ "Ñ", "Ng" ],
        'tr' => [ "Ç", "Ğ", "İ", "Ö", "Ş", "Ü" ],
        'tt' => [ "Ә", "Ө", "Ү", "Җ", "Ң", "Һ" ],
        'uz' => [ "Ch", "G'", "Ng", "O'", "Sh" ],
    ];

    /**
     * @since 1.16.3
     */
    const RECORD_LENGTH = 14;

    public function __construct($locale)
    {
        if (!extension_loaded('intl')) {
            throw new MWException('An ICU collation was requested, ' .
                'but the intl extension is not available.');
        }

        $this->locale = $locale;
        // Drop everything after the '@' in locale's name
        $localeParts = explode('@', $locale);
        $this->digitTransformLanguage = Language::factory($locale === 'root' ? 'en' : $localeParts[0]);

        $this->mainCollator = Collator::create($locale);
        if (!$this->mainCollator) {
            throw new MWException("Invalid ICU locale specified for collation: $locale");
        }

        $this->primaryCollator = Collator::create($locale);
        $this->primaryCollator->setStrength(Collator::PRIMARY);

        // If the special suffix for numeric collation is present, turn on numeric collation.
        if (substr($locale, -5, 5) === '-u-kn') {
            $this->useNumericCollation = true;
            // Strip off the special suffix so it doesn't trip up fetchFirstLetterData().
            $this->locale = substr($this->locale, 0, -5);
            $this->mainCollator->setAttribute(Collator::NUMERIC_COLLATION, Collator::ON);
            $this->primaryCollator->setAttribute(Collator::NUMERIC_COLLATION, Collator::ON);
        }
    }

    public function getSortKey($string)
    {
        return $this->mainCollator->getSortKey($string);
    }

    public function getPrimarySortKey($string)
    {
        return $this->primaryCollator->getSortKey($string);
    }

    public function getFirstLetter($string)
    {
        $string = strval($string);
        if ($string === '') {
            return '';
        }

        $firstChar = mb_substr($string, 0, 1, 'UTF-8');

        // If the first character is a CJK character, just return that character.
        if (ord($firstChar) > 0x7f && self::isCjk(UtfNormal\Utils::utf8ToCodepoint($firstChar))) {
            return $firstChar;
        }

        $sortKey = $this->getPrimarySortKey($string);

        // Do a binary search to find the correct letter to sort under
        $min = ArrayUtils::findLowerBound(
            [ $this, 'getSortKeyByLetterIndex' ],
            $this->getFirstLetterCount(),
            'strcmp',
            $sortKey
        );

        if ($min === false) {
            // Before the first letter
            return '';
        }

        $sortLetter = $this->getLetterByIndex($min);

        if ($this->useNumericCollation) {
            // If the sort letter is a number, return '0�?9' (or localized equivalent).
            // ASCII value of 0 is 48. ASCII value of 9 is 57.
            // Note that this also applies to non-Arabic numerals since they are
            // mapped to Arabic numeral sort letters. For example, �? sorts as 2.
            if (ord($sortLetter) >= 48 && ord($sortLetter) <= 57) {
                $sortLetter = wfMessage('category-header-numerals')->numParams(0, 9)->text();
            }
        }
        return $sortLetter;
    }

    /**
     * @since 1.16.3
     * @return array
     */
    public function getFirstLetterData()
    {
        if ($this->firstLetterData === null) {
            $cache = ObjectCache::getLocalServerInstance(CACHE_ANYTHING);
            $cacheKey = $cache->makeKey(
                'first-letters',
                $this->locale,
                $this->digitTransformLanguage->getCode(),
                self::getICUVersion(),
                self::FIRST_LETTER_VERSION
            );
            $this->firstLetterData = $cache->getWithSetCallback($cacheKey, $cache::TTL_WEEK, function () {
                return $this->fetchFirstLetterData();
            });
        }
        return $this->firstLetterData;
    }

    /**
     * @return array
     * @throws MWException
     */
    private function fetchFirstLetterData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.16.3
     */
    public function getLetterByIndex($index)
    {
        return $this->getFirstLetterData()['chars'][$index];
    }

    /**
     * @since 1.16.3
     */
    public function getSortKeyByLetterIndex($index)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.16.3
     */
    public function getFirstLetterCount()
    {
        return count($this->getFirstLetterData()['chars']);
    }

    /**
     * Test if a code point is a CJK (Chinese, Japanese, Korean) character
     * @since 1.16.3
     */
    public static function isCjk($codepoint)
    {
        foreach (self::$cjkBlocks as $block) {
            if ($codepoint >= $block[0] && $codepoint <= $block[1]) {
                return true;
            }
        }
        return false;
    }

    /**
     * Return the version of ICU library used by PHP's intl extension,
     * or false when the extension is not installed of the version
     * can't be determined.
     *
     * The constant INTL_ICU_VERSION this function refers to isn't really
     * documented. It is available since PHP 5.3.7 (see PHP bug 54561).
     * This function will return false on older PHPs.
     *
     * @since 1.21
     * @return string|bool
     */
    public static function getICUVersion()
    {
        return defined('INTL_ICU_VERSION') ? INTL_ICU_VERSION : false;
    }

    /**
     * Return the version of Unicode appropriate for the version of ICU library
     * currently in use, or false when it can't be determined.
     *
     * @since 1.21
     * @return string|bool
     */
    public static function getUnicodeVersionForICU()
    {
        $icuVersion = IcuCollation::getICUVersion();
        if (!$icuVersion) {
            return false;
        }

        $versionPrefix = substr($icuVersion, 0, 3);
        // Source: http://site.icu-project.org/download
        $map = [
            '57.' => '8.0',
            '56.' => '8.0',
            '55.' => '7.0',
            '54.' => '7.0',
            '53.' => '6.3',
            '52.' => '6.3',
            '51.' => '6.2',
            '50.' => '6.2',
            '49.' => '6.1',
            '4.8' => '6.0',
            '4.6' => '6.0',
            '4.4' => '5.2',
            '4.2' => '5.1',
            '4.0' => '5.1',
            '3.8' => '5.0',
            '3.6' => '5.0',
            '3.4' => '4.1',
        ];

        if (isset($map[$versionPrefix])) {
            return $map[$versionPrefix];
        } else {
            return false;
        }
    }
}
