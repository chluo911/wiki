<?php

/**
 * @group Database
 */
class MultiWriteBagOStuffTest extends MediaWikiTestCase
{
    /** @var HashBagOStuff */
    private $cache1;
    /** @var HashBagOStuff */
    private $cache2;
    /** @var MultiWriteBagOStuff */
    private $cache;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MultiWriteBagOStuff::set
     * @covers MultiWriteBagOStuff::doWrite
     */
    public function testSetImmediate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MultiWriteBagOStuff
     */
    public function testSyncMerge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MultiWriteBagOStuff::set
     */
    public function testSetDelayed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
