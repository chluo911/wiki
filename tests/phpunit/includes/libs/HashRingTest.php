<?php

/**
 * @group HashRing
 */
class HashRingTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers HashRing
     */
    public function testHashRing()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
