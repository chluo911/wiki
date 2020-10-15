<?php

namespace Elastica\Query;

/**
 * Class Boosting.
 *
 * @author Balazs Nadasdi <yitsushi@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-boosting-query.html
 */
class Boosting extends AbstractQuery
{
    const NEGATIVE_BOOST = 0.2;

    /**
     * Set the positive query for this Boosting Query.
     *
     * @param AbstractQuery $query
     *
     * @return $this
     */
    public function setPositiveQuery(AbstractQuery $query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the negative query for this Boosting Query.
     *
     * @param AbstractQuery $query
     *
     * @return $this
     */
    public function setNegativeQuery(AbstractQuery $query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the negative_boost parameter for this Boosting Query.
     *
     * @param float $negativeBoost
     *
     * @return $this
     */
    public function setNegativeBoost($negativeBoost)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
