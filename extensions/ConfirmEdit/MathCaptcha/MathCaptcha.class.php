<?php

use MediaWiki\Auth\AuthenticationRequest;

class MathCaptcha extends SimpleCaptcha
{

    /** Validate a captcha response */
    public function keyMatch($answer, $info)
    {
        return (int)$answer == (int)$info['answer'];
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

    public function getFormInformation($tabIndex = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** Pick a random sum */
    public function pickSum()
    {
        $a = mt_rand(0, 100);
        $b = mt_rand(0, 10);
        $op = mt_rand(0, 1) ? '+' : '-';
        $sum = "{$a} {$op} {$b} = ";
        $ans = $op == '+' ? ($a + $b) : ($a - $b);
        return [ $sum, $ans ];
    }

    /** Fetch the math */
    public function fetchMath($sum)
    {
        if (class_exists('MathRenderer')) {
            $math = MathRenderer::getRenderer($sum, [], 'png');
        } else {
            throw new LogicException(
                'MathCaptcha requires the Math extension for MediaWiki versions 1.18 and above.'
            );
        }
        $math->render();
        $html = $math->getHtmlOutput();
        return preg_replace('/alt=".*?"/', '', $html);
    }

    public function getCaptcha()
    {
        list($sum, $answer) = $this->pickSum();
        return [ 'question' => $sum, 'answer' => $answer ];
    }

    public function getCaptchaInfo($captchaData, $id)
    {
        $sum = $captchaData['question'];
        return $this->fetchMath($sum);
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
