<?php

class BalancerTest extends MediaWikiTestCase
{
    private $balancer;

    /**
     * Anything that needs to happen before your tests should go here.
     */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MediaWiki\Tidy\Balancer::balance
     * @dataProvider provideBalancerTests
     */
    public function testBalancer($description, $input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideBalancerTests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
