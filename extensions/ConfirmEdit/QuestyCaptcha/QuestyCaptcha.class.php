<?php

/**
 * QuestyCaptcha class
 *
 * @file
 * @author Benjamin Lees <emufarmers@gmail.com>
 * @ingroup Extensions
 */

use MediaWiki\Auth\AuthenticationRequest;

class QuestyCaptcha extends SimpleCaptcha
{
    // used for questycaptcha-edit, questycaptcha-addurl, questycaptcha-badlogin,
    // questycaptcha-createaccount, questycaptcha-create, questycaptcha-sendemail via getMessage()
    protected static $messagePrefix = 'questycaptcha-';

    /** Validate a captcha response */
    public function keyMatch($answer, $info)
    {
        if (is_array($info['answer'])) {
            return in_array(strtolower($answer), array_map('strtolower', $info['answer']));
        } else {
            return strtolower($answer) == strtolower($info['answer']);
        }
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

    public function getCaptcha()
    {
        global $wgCaptchaQuestions;

        // Backwards compatibility
        if ($wgCaptchaQuestions === array_values($wgCaptchaQuestions)) {
            return $wgCaptchaQuestions[ mt_rand(0, count($wgCaptchaQuestions) - 1) ];
        }

        $question = array_rand($wgCaptchaQuestions, 1);
        $answer = $wgCaptchaQuestions[ $question ];
        return [ 'question' => $question, 'answer' => $answer ];
    }

    public function getFormInformation($tabIndex = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function showHelp()
    {
        global $wgOut;
        $wgOut->setPageTitle(wfMessage('captchahelp-title')->text());
        $wgOut->addWikiMsg('questycaptchahelp-text');
        if (CaptchaStore::get()->cookiesNeeded()) {
            $wgOut->addWikiMsg('captchahelp-cookies-needed');
        }
    }

    public function getCaptchaInfo($captchaData, $id)
    {
        return $captchaData['question'];
    }

    public function onAuthChangeFormFields(
        array $requests,
        array $fieldInfo,
        array &$formDescriptor,
        $action
    )
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
