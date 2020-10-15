<?php

namespace Elastica\Aggregation;

/**
 * Class Terms.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-terms-aggregation.html
 */
class Terms extends AbstractTermsAggregation
{
    /**
     * Set the bucket sort order.
     *
     * @param string $order     "_count", "_term", or the name of a sub-aggregation or sub-aggregation response field
     * @param string $direction "asc" or "desc"
     *
     * @return $this
     */
    public function setOrder($order, $direction)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
