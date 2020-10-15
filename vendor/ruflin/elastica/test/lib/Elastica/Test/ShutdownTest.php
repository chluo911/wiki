<?php

use Elastica\Test\Base as BaseTest;

/**
 * These tests shuts down node/cluster, so can't be executed with rest testsuite
 * Please use `sudo service elasticsearch restart` after every run of these tests.
 */
class ShutdownTest extends BaseTest
{
    /**
     * @group shutdown
     */
    public function testNodeShutdown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group shutdown
     * @depends testNodeShutdown
     * @expectedException \Elastica\Exception\Connection\HttpException
     */
    public function testClusterShutdown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
