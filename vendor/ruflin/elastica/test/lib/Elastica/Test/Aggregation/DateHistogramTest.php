<?php

namespace Elastica\Test\Aggregation;

use Elastica\Aggregation\DateHistogram;
use Elastica\Document;
use Elastica\Query;
use Elastica\Type\Mapping;

class DateHistogramTest extends BaseAggregationTest
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
    public function testDateHistogramAggregation()
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
    public function testSetOffset()
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
    public function testSetOffsetWorks()
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
    public function testSetTimezone()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
