<?php
/**
 * Based on LanguageMlTest
 * @author Joel Sahleen
 * @copyright Copyright © 2014, Joel Sahleen
 * @file
 */

/** Tests for MediaWiki languages/LanguageArq.php */
class LanguageArqTest extends LanguageClassesTestCase
{
    /**
     * @dataProvider provideNumber
     * @covers Language::formatNum
     */
    public function testFormatNum($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideNumber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
