<?php

namespace Elastica\Filter;

use Elastica\Exception\InvalidException;

trigger_error('Deprecated: Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html', E_USER_DEPRECATED);

/**
 * Geo bounding box filter.
 *
 * @author Fabian Vogler <fabian@equivalence.ch>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-geo-bounding-box-filter.html
 * @deprecated Filters are deprecated. Use queries in filter context. See https://www.elastic.co/guide/en/elasticsearch/reference/2.0/query-dsl-filters.html
 */
class GeoBoundingBox extends AbstractFilter
{
    /**
     * Construct BoundingBoxFilter.
     *
     * @param string $key         Key
     * @param array  $coordinates Array with top left coordinate as first and bottom right coordinate as second element
     */
    public function __construct($key, array $coordinates)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add coordinates.
     *
     * @param string $key         Key
     * @param array  $coordinates Array with top left coordinate as first and bottom right coordinate as second element
     *
     * @throws \Elastica\Exception\InvalidException If $coordinates doesn't have two elements
     *
     * @return $this
     */
    public function addCoordinates($key, array $coordinates)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
