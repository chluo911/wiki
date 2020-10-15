<?php

class QuestyCaptchaTest extends MediaWikiTestCase
{
    /**
     * @covers QuestyCaptcha::getCaptcha
     * @dataProvider provideGetCaptcha
     */
    public function testGetCaptcha($config, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetCaptcha()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
