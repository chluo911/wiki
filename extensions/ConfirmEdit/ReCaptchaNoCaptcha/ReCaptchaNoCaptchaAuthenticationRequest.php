<?php

use MediaWiki\Auth\AuthenticationRequest;

/**
 * Authentication request for ReCaptcha v2. Unlike the parent class, no session storage is used
 * and there is no ID; Google provides a single proof string after successfully solving a captcha.
 */
class ReCaptchaNoCaptchaAuthenticationRequest extends CaptchaAuthenticationRequest
{
    public function __construct()
    {
        parent::__construct(null, null);
    }

    public function loadFromSubmission(array $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getFieldInfo()
    {
        $fieldInfo = parent::getFieldInfo();

        return [
            'captchaWord' => [
                'type' => 'string',
                'label' => $fieldInfo['captchaInfo']['label'],
                'help' => wfMessage('renocaptcha-help'),
            ],
        ];
    }
}
