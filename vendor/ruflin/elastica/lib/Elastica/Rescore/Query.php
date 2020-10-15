<?php

namespace Elastica\Rescore;

use Elastica\Query as BaseQuery;

/**
 * Query Rescore.
 *
 * @author Jason Hu <mjhu91@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-rescore.html
 */
class Query extends AbstractRescore
{
    /**
     * Constructor.
     *
     * @param string|\Elastica\Query\AbstractQuery $query
     */
    public function __construct($query = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Override default implementation so params are in the format
     * expected by elasticsearch.
     *
     * @return array Rescore array
     */
    public function toArray()
    {
        $data = $this->getParams();

        if (!empty($this->_rawParams)) {
            $data = array_merge($data, $this->_rawParams);
        }

        $array = $this->_convertArrayable($data);

        if (isset($array['query']['rescore_query']['query'])) {
            $array['query']['rescore_query'] = $array['query']['rescore_query']['query'];
        }

        return $array;
    }

    /**
     * Sets rescoreQuery object.
     *
     * @param string|\Elastica\Query|\Elastica\Query\AbstractQuery $rescoreQuery
     *
     * @return $this
     */
    public function setRescoreQuery($rescoreQuery)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets query_weight.
     *
     * @param float $weight
     *
     * @return $this
     */
    public function setQueryWeight($weight)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets rescore_query_weight.
     *
     * @param float $weight
     *
     * @return $this
     */
    public function setRescoreQueryWeight($weight)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
