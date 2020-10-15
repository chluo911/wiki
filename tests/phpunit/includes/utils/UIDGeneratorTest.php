<?php

class UIDGeneratorTest extends PHPUnit_Framework_TestCase
{
    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test that generated UIDs have the expected properties
     *
     * @dataProvider provider_testTimestampedUID
     * @covers UIDGenerator::newTimestampedUID128
     * @covers UIDGenerator::newTimestampedUID88
     */
    public function testTimestampedUID($method, $digitlen, $bits, $tbits, $hostbits)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * array( method, length, bits, hostbits )
     * NOTE: When adding a new method name here please update the covers tags for the tests!
     */
    public static function provider_testTimestampedUID()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UIDGenerator::newUUIDv1
     */
    public function testUUIDv1()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UIDGenerator::newUUIDv4
     */
    public function testUUIDv4()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UIDGenerator::newRawUUIDv4
     */
    public function testRawUUIDv4()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UIDGenerator::newRawUUIDv4
     */
    public function testRawUUIDv4QuickRand()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UIDGenerator::newSequentialPerNodeID
     */
    public function testNewSequentialID()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UIDGenerator::newSequentialPerNodeIDs
     */
    public function testNewSequentialIDs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
