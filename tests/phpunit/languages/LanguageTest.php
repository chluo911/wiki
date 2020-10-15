<?php

class LanguageTest extends LanguageClassesTestCase
{
    /**
     * @covers Language::convertDoubleWidth
     * @covers Language::normalizeForSearch
     */
    public function testLanguageConvertDoubleWidthToSingleWidth()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFormattableTimes
     * @covers Language::formatTimePeriod
     */
    public function testFormatTimePeriod($seconds, $format, $expected, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFormattableTimes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Language::truncate
     */
    public function testTruncate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideHTMLTruncateData
     * @covers Language::truncateHTML
     */
    public function testTruncateHtml($len, $ellipsis, $input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array Format is ($len, $ellipsis, $input, $expected)
     */
    public static function provideHTMLTruncateData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test Language::isWellFormedLanguageTag()
     * @dataProvider provideWellFormedLanguageTags
     * @covers Language::isWellFormedLanguageTag
     */
    public function testWellFormedLanguageTag($code, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The test cases are based on the tests in the GaBuZoMeu parser
     * written by Stéphane Bortzmeyer <bortzmeyer@nic.fr>
     * and distributed as free software, under the GNU General Public Licence.
     * http://www.bortzmeyer.org/gabuzomeu-parsing-language-tags.html
     */
    public static function provideWellFormedLanguageTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Negative test for Language::isWellFormedLanguageTag()
     * @dataProvider provideMalformedLanguageTags
     * @covers Language::isWellFormedLanguageTag
     */
    public function testMalformedLanguageTag($code, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The test cases are based on the tests in the GaBuZoMeu parser
     * written by Stéphane Bortzmeyer <bortzmeyer@nic.fr>
     * and distributed as free software, under the GNU General Public Licence.
     * http://www.bortzmeyer.org/gabuzomeu-parsing-language-tags.html
     */
    public static function provideMalformedLanguageTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Negative test for Language::isWellFormedLanguageTag()
     * @covers Language::isWellFormedLanguageTag
     */
    public function testLenientLanguageTag()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test Language::isValidBuiltInCode()
     * @dataProvider provideLanguageCodes
     * @covers Language::isValidBuiltInCode
     */
    public function testBuiltInCodeValidation($code, $expected, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideLanguageCodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test Language::isKnownLanguageTag()
     * @dataProvider provideKnownLanguageTags
     * @covers Language::isKnownLanguageTag
     */
    public function testKnownLanguageTag($code, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideKnownLanguageTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Language::isKnownLanguageTag
     */
    public function testKnownCldrLanguageTag()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Negative tests for Language::isKnownLanguageTag()
     * @dataProvider provideUnKnownLanguageTags
     * @covers Language::isKnownLanguageTag
     */
    public function testUnknownLanguageTag($code, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideUnknownLanguageTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test too short timestamp
     * @expectedException MWException
     * @covers Language::sprintfDate
     */
    public function testSprintfDateTooShortTimestamp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test too long timestamp
     * @expectedException MWException
     * @covers Language::sprintfDate
     */
    public function testSprintfDateTooLongTimestamp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test too short timestamp
     * @expectedException MWException
     * @covers Language::sprintfDate
     */
    public function testSprintfDateNotAllDigitTimestamp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideSprintfDateSamples
     * @covers Language::sprintfDate
     */
    public function testSprintfDate($format, $ts, $expected, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * sprintfDate should always use UTC when no zone is given.
     * @dataProvider provideSprintfDateSamples
     * @covers Language::sprintfDate
     */
    public function testSprintfDateNoZone($format, $ts, $expected, $ignore, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * sprintfDate should use passed timezone
     * @dataProvider provideSprintfDateSamples
     * @covers Language::sprintfDate
     */
    public function testSprintfDateTZ($format, $ts, $ignore, $expected, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * sprintfDate should only calculate a TTL if the caller is going to use it.
     * @covers Language::sprintfDate
     */
    public function testSprintfDateNoTtlIfNotNeeded()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideSprintfDateSamples()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFormatSizes
     * @covers Language::formatSize
     */
    public function testFormatSize($size, $expected, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFormatSizes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFormatBitrate
     * @covers Language::formatBitrate
     */
    public function testFormatBitrate($bps, $expected, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFormatBitrate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFormatDuration
     * @covers Language::formatDuration
     */
    public function testFormatDuration($duration, $expected, $intervals = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFormatDuration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCheckTitleEncodingData
     * @covers Language::checkTitleEncoding
     */
    public function testCheckTitleEncoding($s)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCheckTitleEncodingData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideRomanNumeralsData
     * @covers Language::romanNumeral
     */
    public function testRomanNumerals($num, $numerals)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideRomanNumeralsData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideHebrewNumeralsData
     * @covers Language::hebrewNumeral
     */
    public function testHebrewNumeral($num, $numerals)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideHebrewNumeralsData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providePluralData
     * @covers Language::convertPlural
     */
    public function testConvertPlural($expected, $number, $forms)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providePluralData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Language::embedBidi()
     */
    public function testEmbedBidi()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Language::translateBlockExpiry()
     * @dataProvider provideTranslateBlockExpiry
     */
    public function testTranslateBlockExpiry($expectedData, $str, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideTranslateBlockExpiry()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider parseFormattedNumberProvider
     */
    public function testParseFormattedNumber($langCode, $number)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function parseFormattedNumberProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Language::commafy()
     * @dataProvider provideCommafyData
     */
    public function testCommafy($number, $numbersWithCommas)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCommafyData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Language::listToText
     */
    public function testListToText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideIsSupportedLanguage
     * @covers Language::isSupportedLanguage
     */
    public function testIsSupportedLanguage($code, $expected, $comment)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideIsSupportedLanguage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetParentLanguage
     * @covers Language::getParentLanguage
     */
    public function testGetParentLanguage($code, $expected, $comment)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetParentLanguage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetNamespaceAliases
     * @covers Language::getNamespaceAliases
     */
    public function testGetNamespaceAliases($languageCode, $subset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetNamespaceAliases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
