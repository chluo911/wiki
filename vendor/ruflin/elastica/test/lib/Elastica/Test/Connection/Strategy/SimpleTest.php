<?php

namespace Elastica\Test\Connection\Strategy;

use Elastica\Connection;
use Elastica\Exception\ConnectionException;
use Elastica\Test\Base;

/**
 * Description of SimplyTest.
 *
 * @author chabior
 */
class SimpleTest extends Base
{
    /**
     * @var int Number of seconds to wait before timeout is called. Is set low for tests to have fast tests.
     */
    protected $_timeout = 1;

    /**
     * @group functional
     */
    public function testConnection()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group functional
     * @expectedException \Elastica\Exception\ConnectionException
     */
    public function testFailConnection()
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
    public function testWithOneFailConnection()
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
    public function testWithNoValidConnection()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function _checkStrategy($client)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function _checkResponse($response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
