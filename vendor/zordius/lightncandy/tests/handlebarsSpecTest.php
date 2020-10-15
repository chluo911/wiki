<?php

require_once('src/lightncandy.php');

$tmpdir = sys_get_temp_dir();

class HandlebarsSpecTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider jsonSpecProvider
     */
    public function testSpecs($spec)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function jsonSpecProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
?>
