<?php

require_once('src/lightncandy.php');
require_once('tests/helpers_for_test.php');

class contextTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider compileProvider
     */
    public function testUsedFeature($test)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function compileProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}


?>
