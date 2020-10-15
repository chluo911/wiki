<?php

namespace Elastica\Aggregation;

use Elastica\Exception\InvalidException;

/**
 * Class Range.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-range-aggregation.html
 */
class Range extends AbstractSimpleAggregation
{
    /**
     * Add a range to this aggregation.
     *
     * @param int|float $fromValue low end of this range, exclusive (greater than or equal to)
     * @param int|float $toValue   high end of this range, exclusive (less than)
     * @param string    $key       customized key value
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return $this
     */
    public function addRange($fromValue = null, $toValue = null, $key = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If set to true, a unique string key will be associated with each bucket, and ranges will be returned as an associative array.
     *
     * @param bool $keyed
     *
     * @return $this
     */
    public function setKeyedResponse($keyed = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
