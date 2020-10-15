<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;

/**
 * Geo distance query.
 *
 * @author munkie
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-geo-distance-range-query.html
 */
class GeoDistanceRange extends AbstractGeoDistance
{
    const RANGE_FROM = 'from';
    const RANGE_TO = 'to';
    const RANGE_LT = 'lt';
    const RANGE_LTE = 'lte';
    const RANGE_GT = 'gt';
    const RANGE_GTE = 'gte';

    const RANGE_INCLUDE_LOWER = 'include_lower';
    const RANGE_INCLUDE_UPPER = 'include_upper';

    /**
     * @var array
     */
    protected $_ranges = array();

    /**
     * @param string       $key
     * @param array|string $location
     * @param array        $ranges
     *
     * @internal param string $distance
     */
    public function __construct($key, $location, array $ranges = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $ranges
     *
     * @return $this
     */
    public function setRanges(array $ranges)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $key
     * @param mixed  $value
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return $this
     */
    public function setRange($key, $value)
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
        foreach ($this->_ranges as $key => $value) {
            $this->setParam($key, $value);
        }

        return parent::toArray();
    }
}
