<?php

/**
 * Test for ProcessCacheLRU class.
 *
 * Note that it uses the ProcessCacheLRUTestable class which extends some
 * properties and methods visibility. That class is defined at the end of the
 * file containing this class.
 *
 * @group Cache
 */
class ProcessCacheLRUTest extends PHPUnit_Framework_TestCase
{

    /**
     * Helper to verify emptiness of a cache object.
     * Compare against an array so we get the cache content difference.
     */
    protected function assertCacheEmpty($cache, $msg = 'Cache should be empty')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper to fill a cache object passed by reference
     */
    protected function fillCache(&$cache, $numEntries)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates an array of what would be expected in cache for a given cache
     * size and a number of entries filled in sequentially
     */
    protected function getExpectedCache($cacheMaxEntries, $entryToFill)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Highlight diff between assertEquals and assertNotSame
     */
    public function testPhpUnitArrayEquality()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideInvalidConstructorArg
     * @expectedException Wikimedia\Assert\ParameterAssertionException
     * @covers ProcessCacheLRU::__construct
     */
    public function testConstructorGivenInvalidValue($maxSize)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Value which are forbidden by the constructor
     */
    public static function provideInvalidConstructorArg()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ProcessCacheLRU::get
     * @covers ProcessCacheLRU::set
     * @covers ProcessCacheLRU::has
     */
    public function testAddAndGetAKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ProcessCacheLRU::set
     * @covers ProcessCacheLRU::get
     */
    public function testDeleteOldKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This test that we properly overflow when filling a cache with
     * a sequence of always different cache-keys. Meant to verify we correclty
     * delete the older key.
     *
     * @covers ProcessCacheLRU::set
     * @dataProvider provideCacheFilling
     * @param int $cacheMaxEntries Maximum entry the created cache will hold
     * @param int $entryToFill Number of entries to insert in the created cache.
     */
    public function testFillingCache($cacheMaxEntries, $entryToFill, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider for testFillingCache
     */
    public static function provideCacheFilling()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a cache with only one remaining entry then update
     * the first inserted entry. Should bump it to the top.
     *
     * @covers ProcessCacheLRU::set
     */
    public function testReplaceExistingKeyShouldBumpEntryToTop()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ProcessCacheLRU::get
     * @covers ProcessCacheLRU::set
     * @covers ProcessCacheLRU::has
     */
    public function testRecentlyAccessedKeyStickIn()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This first create a full cache then update the value for the 2nd
     * filled entry.
     * Given a cache having 1,2,3 as key, updating 2 should bump 2 to
     * the top of the queue with the new value: 1,3,2* (* = updated).
     *
     * @covers ProcessCacheLRU::set
     * @covers ProcessCacheLRU::get
     */
    public function testReplaceExistingKeyInAFullCacheShouldBumpToTop()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ProcessCacheLRU::set
     */
    public function testBumpExistingKeyToTop()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Overrides some ProcessCacheLRU methods and properties accessibility.
 */
class ProcessCacheLRUTestable extends ProcessCacheLRU
{
    public $cache = [];

    public function getCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getEntriesCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
