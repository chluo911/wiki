<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;
use Elastica\Filter\AbstractFilter;

/**
 * Bool query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-bool-query.html
 */
class BoolQuery extends AbstractQuery
{
    /**
     * Add should part to query.
     *
     * @param \Elastica\Query\AbstractQuery|array $args Should query
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
     * Add must part to query.
     *
     * @param \Elastica\Query\AbstractQuery|array $args Must query
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
     * Add must not part to query.
     *
     * @param \Elastica\Query\AbstractQuery|array $args Must not query
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
     * Sets the filter.
     *
     * @param \Elastica\Query\AbstractQuery $filter Filter object
     *
     * @return $this
     */
    public function addFilter($filter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a query to the current object.
     *
     * @param string                              $type Query type
     * @param \Elastica\Query\AbstractQuery|array $args Query
     *
     * @throws \Elastica\Exception\InvalidException If not valid query
     *
     * @return $this
     */
    protected function _addQuery($type, $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets boost value of this query.
     *
     * @param float $boost Boost value
     *
     * @return $this
     */
    public function setBoost($boost)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the minimum number of of should match.
     *
     * @param int $minimumNumberShouldMatch Should match minimum
     *
     * @return $this
     */
    public function setMinimumNumberShouldMatch($minimumNumberShouldMatch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts array to an object in case no queries are added.
     *
     * @return array
     */
    public function toArray()
    {
        if (empty($this->_params)) {
            $this->_params = new \stdClass();
        }

        return parent::toArray();
    }
}
