<?php

/**
 * @covers FormatJson
 */
class FormatJsonTest extends MediaWikiTestCase
{
    public static function provideEncoderPrettyPrinting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideEncoderPrettyPrinting
     */
    public function testEncoderPrettyPrinting($pretty, $expectedIndent)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideEncodeDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideEncodeDefault
     */
    public function testEncodeDefault($from, $to)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideEncodeUtf8()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideEncodeUtf8
     */
    public function testEncodeUtf8($from, $to)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideEncodeXmlMeta()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideEncodeXmlMeta
     */
    public function testEncodeXmlMeta($from, $to)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideEncodeAllOk()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideEncodeAllOk
     */
    public function testEncodeAllOk($from, $to)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEncodePhpBug46944()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDecodeReturnType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideParse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Recursively convert arrays into stdClass
     * @param array|string|bool|int|float|null $value
     * @return stdClass|string|bool|int|float|null
     */
    public static function toObject($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideParse
     * @param mixed $value
     */
    public function testParse($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test data for testParseTryFixing.
     *
     * Some PHP interpreters use json-c rather than the JSON.org cannonical
     * parser to avoid being encumbered by the "shall be used for Good, not
     * Evil" clause of the JSON.org parser's license. By default, json-c
     * parses in a non-strict mode which allows trailing commas for array and
     * object delarations among other things, so our JSON_ERROR_SYNTAX rescue
     * block is not always triggered. It however isn't lenient in exactly the
     * same ways as our TRY_FIXING mode, so the assertions in this test are
     * a bit more complicated than they ideally would be:
     *
     * Optional third argument: true if json-c parses the value without
     * intervention, false otherwise. Defaults to true.
     *
     * Optional fourth argument: expected cannonical JSON serialization of
     * json-c parsed result. Defaults to the second argument's value.
     */
    public static function provideParseTryFixing()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideParseTryFixing
     * @param string $value
     * @param string|bool $expected Expected result with strict parser
     * @param bool $jsoncParses Will json-c parse this value without TRY_FIXING?
     * @param string|bool $expectedJsonc Expected result with lenient parser
     * if different from the strict expectation
     */
    public function testParseTryFixing(
        $value,
        $expected,
        $jsoncParses = true,
        $expectedJsonc = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideParseErrors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideParseErrors
     * @param mixed $value
     */
    public function testParseErrors($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideStripComments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FormatJson::stripComments
     * @dataProvider provideStripComments
     * @param string $json
     * @param string $expect
     */
    public function testStripComments($json, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideParseStripComments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FormatJson::parse
     * @covers FormatJson::stripComments
     * @dataProvider provideParseStripComments
     * @param string $json
     * @param mixed $expect
     */
    public function testParseStripComments($json, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate a set of test cases for a particular combination of encoder options.
     *
     * @param array $unescapedGroups List of character groups to leave unescaped
     * @return array Arrays of unencoded strings and corresponding encoded strings
     */
    private static function getEncodeTestCases(array $unescapedGroups)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
