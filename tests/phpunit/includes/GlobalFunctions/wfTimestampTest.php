<?php

/**
 * @group GlobalFunctions
 * @covers ::wfTimestamp
 */
class WfTimestampTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideNormalTimestamps
     */
    public function testNormalTimestamps($input, $format, $output, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideNormalTimestamps()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This test checks wfTimestamp() with values outside.
     * It needs PHP 64 bits or PHP > 5.1.
     * See r74778 and bug 25451
     * @dataProvider provideOldTimestamps
     */
    public function testOldTimestamps($input, $outputType, $output, $message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideOldTimestamps()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @see http://www.w3.org/Protocols/rfc2616/rfc2616-sec3.html#sec3.3.1
     * @dataProvider provideHttpDates
     */
    public function testHttpDate($input, $output, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideHttpDates()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * There are a number of assumptions in our codebase where wfTimestamp()
     * should give the current date but it is not given a 0 there. See r71751 CR
     */
    public function testTimestampParameter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
