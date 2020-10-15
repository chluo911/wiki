<?php

namespace Elastica\Aggregation;

use Elastica\Exception\InvalidException;
use Elastica\Filter\AbstractFilter;
use Elastica\Query\AbstractQuery;

/**
 * Class Filters.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-filters-aggregation.html
 */
class Filters extends AbstractAggregation
{
    const NAMED_TYPE = 1;
    const ANONYMOUS_TYPE = 2;

    /**
     * @var int Type of bucket keys - named, or anonymous
     */
    private $_type = null;

    /**
     * Add a filter.
     *
     * If a name is given, it will be added as a key, otherwise considered as an anonymous filter
     *
     * @param AbstractQuery $filter
     * @param string        $name
     *
     * @return $this
     */
    public function addFilter($filter, $name = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = array();
        $filters = $this->getParam('filters');

        foreach ($filters as $filter) {
            if (self::NAMED_TYPE === $this->_type) {
                $key = key($filter);
                $array['filters']['filters'][$key] = current($filter)->toArray();
            } else {
                $array['filters']['filters'][] = current($filter)->toArray();
            }
        }

        if ($this->_aggs) {
            $array['aggs'] = $this->_convertArrayable($this->_aggs);
        }

        return $array;
    }
}
