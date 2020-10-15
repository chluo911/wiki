<?php
/**
 * Api module to reload FancyCaptcha
 *
 * @ingroup API
 * @ingroup Extensions
 */
class ApiFancyCaptchaReload extends ApiBase
{
    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getAllowedParams()
    {
        return [];
    }

    /**
     * @see ApiBase::getExamplesMessages()
     */
    protected function getExamplesMessages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
