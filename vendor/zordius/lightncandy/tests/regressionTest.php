<?php

require_once('src/lightncandy.php');
require_once('tests/helpers_for_test.php');

$tmpdir = sys_get_temp_dir();

class regressionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider issueProvider
     */
    public function testIssues($issue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function issueProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

?>
