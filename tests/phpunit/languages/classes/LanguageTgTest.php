<?php

class LanguageTgTest extends LanguageClassesTestCase
{
    /**
     * @dataProvider provideAutoConvertToAllVariants
     * @covers Language::autoConvertToAllVariants
     */
    public function testAutoConvertToAllVariants($result, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideAutoConvertToAllVariants()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
