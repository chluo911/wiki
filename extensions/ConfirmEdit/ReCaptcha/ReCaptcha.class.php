<?php

use MediaWiki\Auth\AuthenticationRequest;

class ReCaptcha extends SimpleCaptcha
{
    // used for recaptcha-edit, recaptcha-addurl, recaptcha-badlogin, recaptcha-createaccount,
    // recaptcha-create, recaptcha-sendemail via getMessage()
    protected static $messagePrefix = 'recaptcha-';

    // reCAPTHCA error code returned from recaptcha_check_answer
    private $recaptcha_error = null;

    /**
     * Displays the reCAPTCHA widget.
     * If $this->recaptcha_error is set, it will display an error in the widget.
     */
    public function getFormInformation($tabIndex = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getCaptchaParamsFromRequest(WebRequest $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Calls the library function recaptcha_check_answer to verify the users input.
     * Sets $this->recaptcha_error if the user is incorrect.
     * @param string $challenge Challenge value
     * @param string $response Response value
     * @return boolean
     */
    public function passCaptcha($challenge, $response)
    {
        global $wgReCaptchaPrivateKey, $wgRequest;

        if ($response === null) {
            // new captcha session
            return false;
        }

        $ip = $wgRequest->getIP();

        $recaptcha_response =
            recaptcha_check_answer($wgReCaptchaPrivateKey, $ip, $challenge, $response);

        if (!$recaptcha_response->is_valid) {
            $this->recaptcha_error = $recaptcha_response->error;
            return false;
        }

        $recaptcha_error = null;

        return true;
    }

    public function addCaptchaAPI(&$resultArr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function describeCaptchaType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function APIGetAllowedParams(&$module, &$params, $flags)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getError()
    {
        // do not treat failed captcha attempts as errors
        if (in_array($this->recaptcha_error, [
            'invalid-request-cookie', 'incorrect-captcha-sol',
        ], true)) {
            return null;
        }

        return $this->recaptcha_error;
    }

    public function storeCaptcha($info)
    {
        // ReCaptcha is stored by Google; the ID will be generated at that time as well, and
        // the one returned here won't be used. Just pretend this worked.
        return 'not used';
    }

    public function retrieveCaptcha($index)
    {
        // just pretend it worked
        return [ 'index' => $index ];
    }

    public function getCaptcha()
    {
        // ReCaptcha is handled by frontend code + an external provider; nothing to do here.
        return [];
    }

    public function getCaptchaInfo($captchaData, $id)
    {
        return wfMessage('recaptcha-info');
    }

    public function createAuthenticationRequest()
    {
        return new ReCaptchaAuthenticationRequest();
    }

    public function onAuthChangeFormFields(
        array $requests,
        array $fieldInfo,
        array &$formDescriptor,
        $action
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
