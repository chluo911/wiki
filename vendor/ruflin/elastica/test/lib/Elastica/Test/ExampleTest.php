<?php

namespace Elastica\Test;

use Elastica\Document;
use Elastica\Test\Base as BaseTest;

/**
 * Tests the example code.
 */
class ExampleTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testBasicGettingStarted()
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
    public function testExample()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
