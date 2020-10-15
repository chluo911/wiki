<?php

namespace Elastica\Filter;

trigger_error('Deprecated: Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html', E_USER_DEPRECATED);

/**
 * Multi Abstract filter object. Should be extended by filter types composed of an array of sub filters.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @deprecated Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html
 */
abstract class AbstractMulti extends AbstractFilter
{
    /**
     * Filters.
     *
     * @var array
     */
    protected $_filters = array();

    /**
     * @param array $filters
     */
    public function __construct(array $filters = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add filter.
     *
     * @param \Elastica\Filter\AbstractFilter $filter
     *
     * @return $this
     */
    public function addFilter(AbstractFilter $filter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set filters.
     *
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array Filters
     */
    public function getFilters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @see \Elastica\Param::toArray()
     *
     * @return array
     */
    public function toArray()
    {
        $data = parent::toArray();
        $name = $this->_getBaseName();
        $filterData = $data[$name];

        if (empty($filterData)) {
            $filterData = $this->_filters;
        } else {
            $filterData['filters'] = $this->_filters;
        }

        $data[$name] = $filterData;

        return $this->_convertArrayable($data);
    }
}
