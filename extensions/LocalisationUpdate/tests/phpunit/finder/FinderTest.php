<?php
/**
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

namespace LocalisationUpdate;

class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testGetComponents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
