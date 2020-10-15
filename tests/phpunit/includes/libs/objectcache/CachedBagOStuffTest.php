<?php

/**
 * @group BagOStuff
 */
class CachedBagOStuffTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers CachedBagOStuff::__construct
     * @covers CachedBagOStuff::doGet
     */
    public function testGetFromBackend()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers CachedBagOStuff::set
     * @covers CachedBagOStuff::delete
     */
    public function testSetAndDelete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers CachedBagOStuff::set
     * @covers CachedBagOStuff::delete
     */
    public function testWriteCacheOnly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers CachedBagOStuff::doGet
     */
    public function testCacheBackendMisses()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
