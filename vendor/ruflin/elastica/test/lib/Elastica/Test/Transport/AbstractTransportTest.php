<?php

namespace Elastica\Test\Transport;

use Elastica\Connection;
use Elastica\Transport\AbstractTransport;
use Elastica\Transport\Http;

class AbstractTransportTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Return transport configuration and the expected HTTP method.
     *
     * @return array[]
     */
    public function getValidDefinitions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @dataProvider getValidDefinitions
     */
    public function testCanCreateTransportInstances($transport)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getInvalidDefinitions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @dataProvider getInvalidDefinitions
     * @expectedException Elastica\Exception\InvalidException
     * @expectedExceptionMessage Invalid transport
     */
    public function testThrowsExecptionOnInvalidTransportDefinition($transport)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     */
    public function testCanInjectParamsWhenUsingArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
