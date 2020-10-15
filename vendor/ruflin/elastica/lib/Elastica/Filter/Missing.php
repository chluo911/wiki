<?php

namespace Elastica\Filter;

trigger_error('Deprecated: Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html', E_USER_DEPRECATED);

/**
 * Missing Filter.
 *
 * @author Maciej Wiercinski <maciej@wiercinski.net>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-missing-filter.html
 * @deprecated Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html
 */
class Missing extends AbstractFilter
{
    /**
     * Construct missing filter.
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
