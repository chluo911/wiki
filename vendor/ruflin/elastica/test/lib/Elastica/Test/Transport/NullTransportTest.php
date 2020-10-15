<?php

namespace Elastica\Test\Transport;

use Elastica\Connection;
use Elastica\Query;
use Elastica\Request;
use Elastica\Test\Base as BaseTest;
use Elastica\Transport\NullTransport;

/**
 * Elastica Null Transport Test.
 *
 * @author James Boehmer <james.boehmer@jamesboehmer.com>
 */
class NullTransportTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testEmptyResult()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group functional
     */
    public function testExec()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group functional
     */
    public function testOldObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
