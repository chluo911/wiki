<?php

namespace Elastica\Query;

/**
 * Nested query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-nested-query.html
 */
class Nested extends AbstractQuery
{
    /**
     * Adds field to mlt query.
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
     * Set score method.
     *
     * @param string $scoreMode Options: avg, total, max and none.
     *
     * @return $this
     */
    public function setScoreMode($scoreMode)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
