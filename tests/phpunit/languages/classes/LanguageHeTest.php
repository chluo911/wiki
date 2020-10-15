<?php
/**
 * @author Amir E. Aharoni
 * @copyright Copyright © 2012, Amir E. Aharoni
 * @file
 */

/** Tests for MediaWiki languages/classes/LanguageHe.php */
class LanguageHeTest extends LanguageClassesTestCase
{
    /**
     * The most common usage for the plural forms is two forms,
     * for singular and plural. In this case, the second form
     * is technically dual, but in practice it's used as plural.
     * In some cases, usually with expressions of time, three forms
     * are needed - singular, dual and plural.
     * CLDR also specifies a fourth form for multiples of 10,
     * which is very rare. It also has a mistake, because
     * the number 10 itself is supposed to be just plural,
     * so currently it's overridden in MediaWiki.
     */

    // @todo the below test*PluralForms test methods can be refactored
    //  to use a single test method and data provider..

    /**
     * @dataProvider provideTwoPluralForms
     * @covers Language::convertPlural
     */
    public function testTwoPluralForms($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideThreePluralForms
     * @covers Language::convertPlural
     */
    public function testThreePluralForms($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFourPluralForms
     * @covers Language::convertPlural
     */
    public function testFourPluralForms($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFourPluralForms
     * @covers Language::convertPlural
     */
    public function testGetPluralRuleType($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideTwoPluralForms()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideThreePluralForms()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFourPluralForms()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGrammar
     * @covers Language::convertGrammar
     */
    public function testGrammar($result, $word, $case)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // The comments in the beginning of the line help avoid RTL problems
    // with text editors.
    public static function provideGrammar()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
