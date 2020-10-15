<?php

/**
 * @group BagOStuff
 */
class HashBagOStuffTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers HashBagOStuff::delete
     */
    public function testDelete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers HashBagOStuff::clear
     */
    public function testClear()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers HashBagOStuff::doGet
     * @covers HashBagOStuff::expire
     */
    public function testExpire()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensure maxKeys eviction prefers keeping new keys.
     *
     * @covers HashBagOStuff::__construct
     * @covers HashBagOStuff::set
     */
    public function testEvictionAdd()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensure maxKeys eviction prefers recently set keys
     * even if the keys pre-exist.
     *
     * @covers HashBagOStuff::__construct
     * @covers HashBagOStuff::set
     */
    public function testEvictionSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensure maxKeys eviction prefers recently retrieved keys (LRU).
     *
     * @covers HashBagOStuff::__construct
     * @covers HashBagOStuff::doGet
     * @covers HashBagOStuff::hasKey
     */
    public function testEvictionGet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
