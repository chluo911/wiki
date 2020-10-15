<?php
/**
 * @author Santhosh Thottingal
 * @copyright Copyright © 2012-2013, Santhosh Thottingal
 * @file
 */

/** Tests for MediaWiki languages/classes/LanguageGd.php */
class LanguageGdTest extends LanguageClassesTestCase
{
    /**
     * @dataProvider providerPlural
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

    public static function providerPlural()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providerPluralExplicit
     * @covers Language::convertPlural
     */
    public function testExplicitPlural($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providerPluralExplicit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
