<?php

/**
 * @group Xml
 */
class XmlJs extends PHPUnit_Framework_TestCase
{

    /**
     * @covers XmlJsCode::__construct
     * @dataProvider provideConstruction
     */
    public function testConstruction($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideConstruction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
