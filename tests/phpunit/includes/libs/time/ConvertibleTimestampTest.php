<?php

/**
 * Tests timestamp parsing and output.
 */
class ConvertibleTimestampTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ConvertibleTimestamp::__construct
     */
    public function testConstructWithNoTimestamp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ConvertibleTimestamp::__toString
     */
    public function testToString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideValidTimestampDifferences()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideValidTimestampDifferences
     * @covers ConvertibleTimestamp::diff
     */
    public function testDiff($timestamp1, $timestamp2, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test parsing of valid timestamps and outputing to MW format.
     * @dataProvider provideValidTimestamps
     * @covers ConvertibleTimestamp::getTimestamp
     */
    public function testValidParse($format, $original, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test outputting valid timestamps to different formats.
     * @dataProvider provideValidTimestamps
     * @covers ConvertibleTimestamp::getTimestamp
     */
    public function testValidOutput($format, $expected, $original)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test an invalid timestamp.
     * @expectedException TimestampException
     * @covers ConvertibleTimestamp
     */
    public function testInvalidParse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideValidTimestamps
     * @covers ConvertibleTimestamp::convert
     */
    public function testConvert($format, $expected, $original)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Format an invalid timestamp.
     * @covers ConvertibleTimestamp::convert
     */
    public function testConvertInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test an out of range timestamp
     * @dataProvider provideOutOfRangeTimestamps
     * @expectedException TimestampException
     * @covers       ConvertibleTimestamp
     */
    public function testOutOfRangeTimestamps($format, $input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test requesting an invalid output format.
     * @expectedException TimestampException
     * @covers ConvertibleTimestamp::getTimestamp
     */
    public function testInvalidOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a list of valid timestamps in the format:
     * [ type, timestamp_of_type, timestamp_in_MW ]
     */
    public static function provideValidTimestamps()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a list of out of range timestamps in the format:
     * [ type, timestamp_of_type ]
     */
    public static function provideOutOfRangeTimestamps()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
