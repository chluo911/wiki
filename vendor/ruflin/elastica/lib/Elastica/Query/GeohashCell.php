<?php

namespace Elastica\Query;

/**
 * Class GeohashCell.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-geohash-cell-query.html
 */
class GeohashCell extends AbstractGeoDistance
{
    /**
     * @param string       $key       The field on which to query
     * @param array|string $location  Location as coordinates array or geohash string ['lat' => 40.3, 'lon' => 45.2]
     * @param string|int   $precision Integer length of geohash prefix or distance (3, or "50m")
     * @param bool         $neighbors If true, queries cells next to the given cell.
     */
    public function __construct($key, $location, $precision = -1, $neighbors = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the precision for this query.
     *
     * @param string|int $precision Integer length of geohash prefix or distance (3, or "50m")
     *
     * @return $this
     */
    public function setPrecision($precision)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the neighbors option for this query.
     *
     * @param bool $neighbors If true, queries cells next to the given cell.
     *
     * @return $this
     */
    public function setNeighbors($neighbors)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
