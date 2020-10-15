<?php
/**
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

namespace LocalisationUpdate;

class JSONReaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider parseProvider
     */
    public function testParse($input, $expected, $comment)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function parseProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
