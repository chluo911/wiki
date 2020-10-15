<?php
/**
 * @group GlobalFunctions
 * @covers ::wfArrayPlus2d
 */
class WfArrayPlus2dTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideArrays
     */
    public function testWfArrayPlus2d($baseArray, $newValues, $expected, $testName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for testing wfArrayPlus2d
     *
     * @return array
     */
    public static function provideArrays()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
