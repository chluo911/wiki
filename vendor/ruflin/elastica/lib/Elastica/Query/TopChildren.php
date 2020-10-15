<?php

namespace Elastica\Query;

use Elastica\Query as BaseQuery;

/**
 * Runs the child query with an estimated hits size, and out of the hit docs, aggregates it into parent docs.
 *
 * @author Wu Yang <darkyoung@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-top-children-query.html
 */
class TopChildren extends AbstractQuery
{
    /**
     * Construct topChildren query.
     *
     * @param string|\Elastica\Query|\Elastica\Query\AbstractQuery $query
     * @param string                                               $type  Parent document type
     */
    public function __construct($query, $type = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets query object.
     *
     * @param string|\Elastica\Query|\Elastica\Query\AbstractQuery $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set type of the parent document.
     *
     * @param string $type Parent document type
     *
     * @return $this
     */
    public function setType($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
