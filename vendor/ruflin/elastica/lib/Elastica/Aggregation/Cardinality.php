<?php

namespace Elastica\Aggregation;

/**
 * Class Cardinality.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-metrics-cardinality-aggregation.html
 */
class Cardinality extends AbstractSimpleAggregation
{
    /**
     * @param int $precisionThreshold
     *
     * @return $this
     */
    public function setPrecisionThreshold($precisionThreshold)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param bool $rehash
     *
     * @return $this
     */
    public function setRehash($rehash)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
