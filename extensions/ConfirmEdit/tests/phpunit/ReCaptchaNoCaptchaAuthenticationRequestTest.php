<?php

use MediaWiki\Auth\AuthenticationRequestTestCase;

require_once __DIR__ . '/../../ReCaptchaNoCaptcha/ReCaptchaNoCaptchaAuthenticationRequest.php';

class ReCaptchaNoCaptchaAuthenticationRequestTest extends AuthenticationRequestTestCase
{
    protected function getInstance(array $args = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideLoadFromSubmission()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
