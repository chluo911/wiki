<?php

namespace Elastica\Test\Aggregation;

use Elastica\Aggregation\IpRange;
use Elastica\Document;
use Elastica\Query;
use Elastica\Type\Mapping;

class IpRangeTest extends BaseAggregationTest
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
    public function testIpRangeAggregation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
