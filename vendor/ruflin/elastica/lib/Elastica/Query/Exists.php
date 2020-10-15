<?php

namespace Elastica\Query;

/**
 * Exists query.
 *
 * @author Oleg Cherniy <oleg.cherniy@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-exists-query.html
 */
class Exists extends AbstractQuery
{
    /**
     * Construct exists query.
     *
     * @param string $field
     */
    public function __construct($field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field.
     *
     * @param string $field
     *
     * @return $this
     */
    public function setField($field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
