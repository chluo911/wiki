<?php

class ReplicatedBagOStuffTest extends MediaWikiTestCase
{
    /** @var HashBagOStuff */
    private $writeCache;
    /** @var HashBagOStuff */
    private $readCache;
    /** @var ReplicatedBagOStuff */
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
     * @covers ReplicatedBagOStuff::set
     */
    public function testSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ReplicatedBagOStuff::get
     */
    public function testGet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ReplicatedBagOStuff::get
     */
    public function testGetAbsent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
