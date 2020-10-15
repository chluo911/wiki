<?php

namespace Elastica\Filter;

use Elastica\Query\AbstractQuery;

trigger_error('Deprecated: Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html', E_USER_DEPRECATED);

/**
 * Nested filter.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link http://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-nested-filter.html
 * @deprecated Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html
 */
class Nested extends AbstractFilter
{
    /**
     * Adds field to mlt filter.
     *
     * @param string $path Nested object path
     *
     * @return $this
     */
    public function setPath($path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets nested query.
     *
     * @param \Elastica\Query\AbstractQuery $query
     *
     * @return $this
     */
    public function setQuery(AbstractQuery $query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets nested filter.
     *
     * @param \Elastica\Filter\AbstractFilter $filter
     *
     * @return $this
     */
    public function setFilter(AbstractFilter $filter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set join option.
     *
     * @param bool $join
     *
     * @return $this
     */
    public function setJoin($join)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
