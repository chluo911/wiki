<?php

namespace Elastica\Test\Query;

use Elastica\Query\Nested;
use Elastica\Query\QueryString;
use Elastica\Test\Base as BaseTest;

class NestedTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testSetQuery()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
