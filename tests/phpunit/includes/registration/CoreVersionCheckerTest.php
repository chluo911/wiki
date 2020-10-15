<?php

/**
 * @covers CoreVersionChecker
 */
class CoreVersionCheckerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideCheck
     */
    public function testCheck($coreVersion, $constraint, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCheck()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
