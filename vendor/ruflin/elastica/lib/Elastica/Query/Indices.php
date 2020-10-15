<?php

namespace Elastica\Query;

use Elastica\Index as ElasticaIndex;

/**
 * Class Indices.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-indices-query.html
 */
class Indices extends AbstractQuery
{
    /**
     * @param AbstractQuery $query   Query which will be applied to docs in the specified indices
     * @param mixed[]       $indices
     */
    public function __construct(AbstractQuery $query, array $indices)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the indices on which this query should be applied.
     *
     * @param mixed[] $indices
     *
     * @return $this
     */
    public function setIndices(array $indices)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds one more index on which this query should be applied.
     *
     * @param string|\Elastica\Index $index
     *
     * @return $this
     */
    public function addIndex($index)
    {
        if ($index instanceof ElasticaIndex) {
            $index = $index->getName();
        }

        return $this->addParam('indices', (string) $index);
    }

    /**
     * Set the query to be applied to docs in the specified indices.
     *
     * @param AbstractQuery $query
     *
     * @return $this
     */
    public function setQuery(AbstractQuery $query)
    {
        return $this->setParam('query', $query);
    }

    /**
     * Set the query to be applied to docs in indices which do not match those specified in the "indices" parameter.
     *
     * @param AbstractQuery $query
     *
     * @return $this
     */
    public function setNoMatchQuery(AbstractQuery $query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
