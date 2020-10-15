<?php
/**
 * @group GlobalFunctions
 * @covers ::wfBCP47
 */
class WfBCP47Test extends MediaWikiTestCase
{
    /**
     * test @see wfBCP47().
     * Please note the BCP 47 explicitly state that language codes are case
     * insensitive, there are some exceptions to the rule :)
     * This test is used to verify our formatting against all lower and
     * all upper cases language code.
     *
     * @see https://tools.ietf.org/html/bcp47
     * @dataProvider provideLanguageCodes()
     */
    public function testBCP47($code, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Array format is ($code, $expected)
     */
    public static function provideLanguageCodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
