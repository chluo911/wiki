<?php

namespace Elastica\Test\Aggregation;

use Elastica\Aggregation\ScriptedMetric;
use Elastica\Document;
use Elastica\Query;
use Elastica\Type\Mapping;

class ScriptedMetricTest extends BaseAggregationTest
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
    public function testScriptedMetricAggregation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
