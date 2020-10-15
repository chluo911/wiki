<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;
use Elastica\Filter\AbstractFilter;

/**
 * Constant score query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-constant-score-query.html
 */
class ConstantScore extends AbstractQuery
{
    /**
     * Construct constant score query.
     *
     * @param null|\Elastica\Query\AbstractQuery|array $filter
     */
    public function __construct($filter = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set filter.
     *
     * @param array|\Elastica\Query\AbstractQuery $filter
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
     * Set query.
     *
     * @param array|\Elastica\Query\AbstractQuery $query
     *
     * @throws InvalidException If query is not an array or instance of AbstractQuery
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
     * Set boost.
     *
     * @param float $boost
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
}
