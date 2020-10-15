<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;

/**
 * Geo bounding box query.
 *
 * @author Fabian Vogler <fabian@equivalence.ch>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-geo-bounding-box-query.html
 */
class GeoBoundingBox extends AbstractQuery
{
    /**
     * Construct BoundingBoxQuery.
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
