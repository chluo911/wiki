<?php

abstract class ApiFormatTestBase extends MediaWikiTestCase
{

    /**
     * Name of the formatter being tested
     * @var string
     */
    protected $printerName;

    /**
     * Return general data to be encoded for testing
     * @return array See self::testGeneralEncoding
     * @throws Exception
     */
    public static function provideGeneralEncoding()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the formatter output for the given input data
     * @param array $params Query parameters
     * @param array $data Data to encode
     * @param string $class Printer class to use instead of the normal one
     * @return string
     * @throws Exception
     */
    protected function encodeData(array $params, array $data, $class = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGeneralEncoding
     */
    public function testGeneralEncoding(array $data, $expect, array $params = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
