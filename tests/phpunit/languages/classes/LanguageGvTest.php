<?php
/**
 * Test for Manx (Gaelg) language
 *
 * @author Santhosh Thottingal
 * @copyright Copyright © 2013, Santhosh Thottingal
 * @file
 */

class LanguageGvTest extends LanguageClassesTestCase
{
    /**
     * @dataProvider providePlural
     * @covers Language::convertPlural
     */
    public function testPlural($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providePlural
     * @covers Language::getPluralRuleType
     */
    public function testGetPluralRuleType($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providePlural()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
