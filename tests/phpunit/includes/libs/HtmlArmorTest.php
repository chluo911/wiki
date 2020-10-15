<?php

/**
 * @covers HtmlArmor
 */
class HtmlArmorTest extends PHPUnit_Framework_TestCase
{
    public static function provideHtmlArmor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideHtmlArmor
     */
    public function testHtmlArmor($input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
