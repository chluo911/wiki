<?php

namespace Elastica\Test\Aggregation;

use Elastica\Aggregation\Missing;
use Elastica\Document;
use Elastica\Query;

class MissingTest extends BaseAggregationTest
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
    public function testMissingAggregation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
