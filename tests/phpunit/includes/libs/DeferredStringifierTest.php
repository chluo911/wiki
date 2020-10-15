<?php

class DeferredStringifierTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers DeferredStringifier
     * @dataProvider provideToString
     */
    public function testToString($params, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideToString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that the callback is not called if
     * it is never converted to a string
     */
    public function testCallbackNotCalled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
