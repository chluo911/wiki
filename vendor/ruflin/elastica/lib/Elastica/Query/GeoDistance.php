<?php

namespace Elastica\Query;

/**
 * Geo distance query.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-geo-distance-query.html
 */
class GeoDistance extends AbstractGeoDistance
{
    const DISTANCE_TYPE_ARC = 'arc';
    const DISTANCE_TYPE_PLANE = 'plane';
    const DISTANCE_TYPE_SLOPPY_ARC = 'sloppy_arc';

    const OPTIMIZE_BBOX_MEMORY = 'memory';
    const OPTIMIZE_BBOX_INDEXED = 'indexed';
    const OPTIMIZE_BBOX_NONE = 'none';

    /**
     * Create GeoDistance object.
     *
     * @param string       $key      Key
     * @param array|string $location Location as array or geohash: array('lat' => 48.86, 'lon' => 2.35) OR 'drm3btev3e86'
     * @param string       $distance Distance
     *
     * @throws \Elastica\Exception\InvalidException
     */
    public function __construct($key, $location, $distance)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $distance
     *
     * @return $this
     */
    public function setDistance($distance)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * See DISTANCE_TYPE_* constants.
     *
     * @param string $distanceType
     *
     * @return $this
     */
    public function setDistanceType($distanceType)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * See OPTIMIZE_BBOX_* constants.
     *
     * @param string $optimizeBbox
     *
     * @return $this
     */
    public function setOptimizeBbox($optimizeBbox)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
