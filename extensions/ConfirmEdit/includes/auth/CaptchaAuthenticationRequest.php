<?php

use MediaWiki\Auth\AuthenticationRequest;
use MediaWiki\Auth\AuthManager;

/**
 * Generic captcha authentication request class. A captcha consist some data stored in the session
 * (e.g. a question and its answer), an ID that references the data, and a solution.
 */
class CaptchaAuthenticationRequest extends AuthenticationRequest
{
    /** @var string Identifier of the captcha. Used internally to remember which captcha was used. */
    public $captchaId;

    /** @var array Information about the captcha (e.g. question text; solution). Exact semantics
     *    differ between types. */
    public $captchaData;

    /** @var string Captcha solution submitted by the user. */
    public $captchaWord;

    public function __construct($id, $data)
    {
        $this->captchaId = $id;
        $this->captchaData = $data;
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
        $captcha = ConfirmEditHooks::getInstance();

        $action = 'generic'; // doesn't actually exist but *Captcha::getMessage will handle that
        switch ($this->action) {
            case AuthManager::ACTION_LOGIN:
                $action = 'badlogin';
                break;
            case AuthManager::ACTION_CREATE:
                $action = 'createaccount';
                break;
        }

        $fields = [
            'captchaId' => [
                'type' => 'hidden',
                'value' => $this->captchaId,
                'label' => wfMessage('captcha-id-label'),
                'help' => wfMessage('captcha-id-help'),
            ],
            'captchaInfo' => [
                'type' => 'null',
                'label' => $captcha->getMessage($action),
                'value' => $captcha->getCaptchaInfo($this->captchaData, $this->captchaId),
                'help' => wfMessage('captcha-info-help'),
            ],
            'captchaWord' => [
                'type' => 'string',
                'label' => wfMessage('captcha-label'),
                'help' => wfMessage('captcha-help'),
            ],
        ];

        return $fields;
    }

    public function getMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function __set_state($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
