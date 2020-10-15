<?php

namespace Elastica\Test\Aggregation;

use Elastica\Aggregation\Avg;
use Elastica\Aggregation\GlobalAggregation;

class GlobalAggregationTest extends BaseAggregationTest
{
    /**
     * @group unit
     */
    public function testToArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
