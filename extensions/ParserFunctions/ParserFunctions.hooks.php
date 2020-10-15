<?php

class ParserFunctionsHooks
{

    /**
     * Enable string functions, when running Wikimedia Jenkins unit tests.
     *
     * Running Jenkins unit tests without setting $wgPFEnableStringFunctions = true;
     * will cause all the parser tests for string functions to be skipped.
     */
    public static function onRegistration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param $parser Parser
     * @return bool
     */
    public static function onParserFirstCallInit($parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function onScribuntoExternalLibraries($engine, array &$extraLibraries)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
