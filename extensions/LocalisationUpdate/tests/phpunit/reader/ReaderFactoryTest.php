<?php
/**
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

namespace LocalisationUpdate;

class ReaderFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getReaderProvider
     */
    public function testGetReader($input, $expected, $comment)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getReaderProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
