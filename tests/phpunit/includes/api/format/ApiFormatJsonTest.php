<?php

/**
 * @group API
 * @covers ApiFormatJson
 */
class ApiFormatJsonTest extends ApiFormatTestBase
{
    protected $printerName = 'json';

    private static function addFormatVersion($format, $arr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGeneralEncoding()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
