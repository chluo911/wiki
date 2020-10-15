<?php

// @codingStandardsIgnoreStart Ignore Squiz.Classes.ValidClassName.NotCamelCaps
class LanguageBe_taraskTest extends LanguageClassesTestCase
{
    // @codingStandardsIgnoreEnd
    /**
     * Make sure the language code we are given is indeed
     * be-tarask. This is to ensure LanguageClassesTestCase
     * does not give us the wrong language.
     */
    public function testBeTaraskTestsUsesBeTaraskCode()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @see bug 23156 & r64981
     * @covers Language::commafy
     */
    public function testSearchRightSingleQuotationMarkAsApostroph()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @see bug 23156 & r64981
     * @covers Language::commafy
     */
    public function testCommafy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @see bug 23156 & r64981
     * @covers Language::commafy
     */
    public function testDoesNotCommafyFourDigitsNumber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

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

    /**
     * @dataProvider providePluralTwoForms
     * @covers Language::convertPlural
     */
    public function testPluralTwoForms($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providePluralTwoForms()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
