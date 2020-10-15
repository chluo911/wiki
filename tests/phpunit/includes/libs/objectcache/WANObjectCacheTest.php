<?php

class WANObjectCacheTest extends PHPUnit_Framework_TestCase
{
    /** @var WANObjectCache */
    private $cache;
    /**@var BagOStuff */
    private $internalCache;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideSetAndGet
     * @covers WANObjectCache::set()
     * @covers WANObjectCache::get()
     * @covers WANObjectCache::makeKey()
     * @param mixed $value
     * @param integer $ttl
     */
    public function testSetAndGet($value, $ttl)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideSetAndGet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::get()
     * @covers WANObjectCache::makeGlobalKey()
     */
    public function testGetNotExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::set()
     */
    public function testSetOver()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::set()
     */
    public function testStaleSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testProcessCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider getWithSetCallback_provider
     * @covers WANObjectCache::getWithSetCallback()
     * @covers WANObjectCache::doGetWithSetCallback()
     * @param array $extOpts
     * @param bool $versioned
     */
    public function testGetWithSetCallback(array $extOpts, $versioned)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getWithSetCallback_provider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider getMultiWithSetCallback_provider
     * @covers WANObjectCache::getMultiWithSetCallback()
     * @covers WANObjectCache::makeMultiKeys()
     * @param array $extOpts
     * @param bool $versioned
     */
    public function testGetMultiWithSetCallback(array $extOpts, $versioned)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getMultiWithSetCallback_provider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::getWithSetCallback()
     * @covers WANObjectCache::doGetWithSetCallback()
     */
    public function testLockTSE()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::getWithSetCallback()
     * @covers WANObjectCache::doGetWithSetCallback()
     */
    public function testLockTSESlow()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::getWithSetCallback()
     * @covers WANObjectCache::doGetWithSetCallback()
     */
    public function testBusyValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::getMulti()
     */
    public function testGetMulti()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::getMulti()
     * @covers WANObjectCache::processCheckKeys()
     */
    public function testGetMultiCheckKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::get()
     * @covers WANObjectCache::processCheckKeys()
     */
    public function testCheckKeyInitHoldoff()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::delete()
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
     * @dataProvider getWithSetCallback_versions_provider
     * @param array $extOpts
     * @param $versioned
     */
    public function testGetWithSetCallback_versions(array $extOpts, $versioned)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getWithSetCallback_versions_provider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::touchCheckKey()
     * @covers WANObjectCache::resetCheckKey()
     * @covers WANObjectCache::getCheckKeyTime()
     */
    public function testTouchKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::getMulti()
     */
    public function testGetWithSeveralCheckKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::set()
     */
    public function testSetWithLag()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WANObjectCache::set()
     */
    public function testWritePending()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testMcRouterSupport()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAdaptiveTTL
     * @covers WANObjectCache::adaptiveTTL()
     * @param float|int $ago
     * @param int $maxTTL
     * @param int $minTTL
     * @param float $factor
     * @param int $adaptiveTTL
     */
    public function testAdaptiveTTL($ago, $maxTTL, $minTTL, $factor, $adaptiveTTL)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideAdaptiveTTL()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
