<?php

/**
 * @group API
 * @covers ApiFormatNone
 */
class ApiFormatNoneTest extends ApiFormatTestBase
{
    protected $printerName = 'none';

    public static function provideGeneralEncoding()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
