<?php

use Psr\Log\NullLogger;

/**
 * @group Media
 */
class XMPValidateTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideDates
     * @covers XMPValidate::validateDate
     */
    public function testValidateDate($value, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideDates()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
