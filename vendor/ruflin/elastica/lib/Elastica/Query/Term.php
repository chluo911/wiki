<?php

namespace Elastica\Query;

/**
 * Term query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-term-query.html
 */
class Term extends AbstractQuery
{
    /**
     * Constructs the Term query object.
     *
     * @param array $term OPTIONAL Calls setTerm with the given $term array
     */
    public function __construct(array $term = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set term can be used instead of addTerm if some more special
     * values for a term have to be set.
     *
     * @param array $term Term array
     *
     * @return $this
     */
    public function setRawTerm(array $term)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a term to the term query.
     *
     * @param string       $key   Key to query
     * @param string|array $value Values(s) for the query. Boost can be set with array
     * @param float        $boost OPTIONAL Boost value (default = 1.0)
     *
     * @return $this
     */
    public function setTerm($key, $value, $boost = 1.0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
