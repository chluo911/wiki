<?php

/**
 * Tests timestamp parsing and output.
 */
class MWTimestampTest extends MediaWikiLangTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideHumanTimestampTests
     * @covers MWTimestamp::getHumanTimestamp
     */
    public function testHumanTimestamp(
        $tsTime, // The timestamp to format
        $currentTime, // The time to consider "now"
        $timeCorrection, // The time offset to use
        $dateFormat, // The date preference to use
        $expectedOutput, // The expected output
        $desc // Description
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideHumanTimestampTests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideRelativeTimestampTests
     * @covers MWTimestamp::getRelativeTimestamp
     */
    public function testRelativeTimestamp(
        $tsTime, // The timestamp to format
        $currentTime, // The time to consider "now"
        $timeCorrection, // The time offset to use
        $dateFormat, // The date preference to use
        $expectedOutput, // The expected output
        $desc // Description
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideRelativeTimestampTests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
