<?php

namespace Elastica\Filter;

trigger_error('Deprecated: Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html', E_USER_DEPRECATED);

/**
 * Returns parent documents having child docs matching the query.
 *
 * @author Fabian Vogler <fabian@equivalence.ch>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-has-child-filter.html
 * @deprecated Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html
 */
class HasChild extends AbstractFilter
{
    /**
     * Construct HasChild filter.
     *
     * @param string|\Elastica\Query|\Elastica\Filter\AbstractFilter $query Query string or a Elastica\Query object or a filter
     * @param string|\Elastica\Type                                  $type  Child document type
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
     * Sets the filter object.
     *
     * @param \Elastica\Filter\AbstractFilter $filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set type of the child document.
     *
     * @param string|\Elastica\Type $type Child document type
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

    /**
     * Set minimum number of children are required to match for the parent doc to be considered a match.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setMinimumChildrenCount($count)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set maximum number of children are required to match for the parent doc to be considered a match.
     *
     * @param int $count
     *
     * @return $this
     */
    public function setMaximumChildrenCount($count)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $array = parent::toArray();

        $baseName = $this->_getBaseName();

        if (isset($array[$baseName]['query'])) {
            $array[$baseName]['query'] = $array[$baseName]['query']['query'];
        }

        return $array;
    }
}
