<?php

namespace Elastica\Query;

/**
 * Class SimpleQueryString.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-simple-query-string-query.html
 */
class SimpleQueryString extends AbstractQuery
{
    const OPERATOR_AND = 'and';
    const OPERATOR_OR = 'or';

    /**
     * @param string $query
     * @param array  $fields
     */
    public function __construct($query, array $fields = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the querystring for this query.
     *
     * @param string $query see ES documentation for querystring syntax
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
     * @param string[] $fields the fields on which to perform this query. Defaults to index.query.default_field.
     *
     * @return $this
     */
    public function setFields(array $fields)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the default operator to use if no explicit operator is defined in the query string.
     *
     * @param string $operator see OPERATOR_* constants for options
     *
     * @return $this
     */
    public function setDefaultOperator($operator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the analyzer used to analyze each term of the query.
     *
     * @param string $analyzer
     *
     * @return $this
     */
    public function setAnalyzer($analyzer)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set minimum_should_match option.
     *
     * @param int|string $minimumShouldMatch
     *
     * @return $this
     */
    public function setMinimumShouldMatch($minimumShouldMatch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
