<?php

use MediaWiki\Auth\AuthenticationRequest;

class ReCaptchaNoCaptcha extends SimpleCaptcha
{
    // used for renocaptcha-edit, renocaptcha-addurl, renocaptcha-badlogin, renocaptcha-createaccount,
    // renocaptcha-create, renocaptcha-sendemail via getMessage()
    protected static $messagePrefix = 'renocaptcha-';

    private $error = null;
    /**
     * Get the captcha form.
     * @return array
     */
    public function getFormInformation($tabIndex = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function logCheckError($info)
    {
        if ($info instanceof Status) {
            $errors = $info->getErrorsArray();
            $error = $errors[0][0];
        } elseif (is_array($info)) {
            $error = implode(',', $info);
        } else {
            $error = $info;
        }

        wfDebugLog('captcha', 'Unable to validate response: ' . $error);
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
     * Check, if the user solved the captcha.
     *
     * Based on reference implementation:
     * https://github.com/google/recaptcha#php
     *
     * @param $_ mixed Not used (ReCaptcha v2 puts index and solution in a single string)
     * @param $word string captcha solution
     * @return boolean
     */
    public function passCaptcha($_, $word)
    {
        global $wgRequest, $wgReCaptchaSecretKey, $wgReCaptchaSendRemoteIP;

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        // Build data to append to request
        $data = [
            'secret' => $wgReCaptchaSecretKey,
            'response' => $word,
        ];
        if ($wgReCaptchaSendRemoteIP) {
            $data['remoteip'] = $wgRequest->getIP();
        }
        $url = wfAppendQuery($url, $data);
        $request = MWHttpRequest::factory($url, [ 'method' => 'GET' ]);
        $status = $request->execute();
        if (!$status->isOK()) {
            $this->error = 'http';
            $this->logCheckError($status);
            return false;
        }
        $response = FormatJson::decode($request->getContent(), true);
        if (!$response) {
            $this->error = 'json';
            $this->logCheckError($this->error);
            return false;
        }
        if (isset($response['error-codes'])) {
            $this->error = 'recaptcha-api';
            $this->logCheckError($response['error-codes']);
            return false;
        }

        return $response['success'];
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

    /**
     * Show a message asking the user to enter a captcha on edit
     * The result will be treated as wiki text
     *
     * @param $action string Action being performed
     * @return string Wikitext
     */
    public function getMessage($action)
    {
        $msg = parent::getMessage($action);
        if ($this->error) {
            $msg = new RawMessage('<div class="error">$1</div>', [ $msg ]);
        }
        return $msg;
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
        return $this->error;
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
        return wfMessage('renocaptcha-info');
    }

    public function createAuthenticationRequest()
    {
        return new ReCaptchaNoCaptchaAuthenticationRequest();
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
