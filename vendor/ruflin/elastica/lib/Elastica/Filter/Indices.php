<?php

namespace Elastica\Filter;

use Elastica\Index as ElasticaIndex;

trigger_error('Deprecated: Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html', E_USER_DEPRECATED);

/**
 * Class Indices.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-indices-filter.html
 * @deprecated Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html
 */
class Indices extends AbstractFilter
{
    /**
     * @param AbstractFilter $filter  filter which will be applied to docs in the specified indices
     * @param mixed[]        $indices
     */
    public function __construct(AbstractFilter $filter, array $indices)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the indices on which this filter should be applied.
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
     * Adds one more index on which this filter should be applied.
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
     * Set the filter to be applied to docs in the specified indices.
     *
     * @param AbstractFilter $filter
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
     * Set the filter to be applied to docs in indices which do not match those specified in the "indices" parameter.
     *
     * @param AbstractFilter $filter
     *
     * @return $this
     */
    public function setNoMatchFilter(AbstractFilter $filter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
