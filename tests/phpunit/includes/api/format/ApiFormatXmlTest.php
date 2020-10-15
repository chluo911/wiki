<?php

/**
 * @group API
 * @group Database
 * @covers ApiFormatXml
 */
class ApiFormatXmlTest extends ApiFormatTestBase
{
    protected $printerName = 'xml';

    public static function setUpBeforeClass()
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
