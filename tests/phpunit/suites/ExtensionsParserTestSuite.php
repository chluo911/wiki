<?php
class ExtensionsParserTestSuite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
