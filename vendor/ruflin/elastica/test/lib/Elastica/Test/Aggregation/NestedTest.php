<?php

namespace Elastica\Test\Aggregation;

use Elastica\Aggregation\Min;
use Elastica\Aggregation\Nested;
use Elastica\Document;
use Elastica\Query;
use Elastica\Type\Mapping;

class NestedTest extends BaseAggregationTest
{
    protected function _getIndexForTest()
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
    public function testNestedAggregation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
