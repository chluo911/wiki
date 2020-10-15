<?php

require_once __DIR__ . '/../../ReCaptchaNoCaptcha/HTMLReCaptchaNoCaptchaField.php';

class HTMLReCaptchaNoCaptchaFieldTest extends PHPUnit_Framework_TestCase
{
    public function testSubmit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
