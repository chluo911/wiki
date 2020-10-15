<?php

namespace Elastica\Filter;

use Elastica\Exception\InvalidException;

trigger_error('Deprecated: Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html', E_USER_DEPRECATED);

/**
 * Bool Filter.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-bool-filter.html
 * @deprecated Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html
 */
class BoolFilter extends AbstractFilter
{
    /**
     * Must.
     *
     * @var array
     */
    protected $_must = array();

    /**
     * Should.
     *
     * @var array
     */
    protected $_should = array();

    /**
     * Must not.
     *
     * @var array
     */
    protected $_mustNot = array();

    /**
     * Adds should filter.
     *
     * @param array|\Elastica\Filter\AbstractFilter $args Filter data
     *
     * @return $this
     */
    public function addShould($args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds must filter.
     *
     * @param array|\Elastica\Filter\AbstractFilter $args Filter data
     *
     * @return $this
     */
    public function addMust($args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds mustNot filter.
     *
     * @param array|\Elastica\Filter\AbstractFilter $args Filter data
     *
     * @return $this
     */
    public function addMustNot($args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds general filter based on type.
     *
     * @param string                                $type Filter type
     * @param array|\Elastica\Filter\AbstractFilter $args Filter data
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return $this
     */
    protected function _addFilter($type, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts bool filter to array.
     *
     * @see \Elastica\Filter\AbstractFilter::toArray()
     *
     * @return array Filter array
     */
    public function toArray()
    {
        $args = array();

        if (!empty($this->_must)) {
            $args['bool']['must'] = $this->_must;
        }

        if (!empty($this->_should)) {
            $args['bool']['should'] = $this->_should;
        }

        if (!empty($this->_mustNot)) {
            $args['bool']['must_not'] = $this->_mustNot;
        }

        if (isset($args['bool'])) {
            $args['bool'] = array_merge($args['bool'], $this->getParams());
        }

        return $this->_convertArrayable($args);
    }
}
