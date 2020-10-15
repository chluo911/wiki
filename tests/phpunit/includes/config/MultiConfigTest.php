<?php

class MultiConfigTest extends MediaWikiTestCase
{

    /**
     * Tests that settings are fetched in the right order
     *
     * @covers MultiConfig::get
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
     * @covers MultiConfig::has
     */
    public function testHas()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
