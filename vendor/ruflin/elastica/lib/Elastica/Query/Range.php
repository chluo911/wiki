<?php

namespace Elastica\Query;

/**
 * Range query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-range-query.html
 */
class Range extends AbstractQuery
{
    /**
     * Constructor.
     *
     * @param string $fieldName Field name
     * @param array  $args      Field arguments
     */
    public function __construct($fieldName = null, array $args = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a range field to the query.
     *
     * @param string $fieldName Field name
     * @param array  $args      Field arguments
     *
     * @return $this
     */
    public function addField($fieldName, array $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
