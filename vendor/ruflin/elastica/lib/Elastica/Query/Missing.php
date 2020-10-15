<?php

namespace Elastica\Query;

/**
 * Missing Query.
 *
 * @author Maciej Wiercinski <maciej@wiercinski.net>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-missing-query.html
 */
class Missing extends AbstractQuery
{
    /**
     * Construct missing query.
     *
     * @param string $field OPTIONAL
     */
    public function __construct($field = '')
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

    /**
     * Set "existence" parameter.
     *
     * @param bool $existence
     *
     * @return $this
     */
    public function setExistence($existence)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set "null_value" parameter.
     *
     * @param bool $nullValue
     *
     * @return $this
     */
    public function setNullValue($nullValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
