<?php

namespace Elastica\Query;

/**
 * geo_shape query or provided shapes.
 *
 * Query provided shape definitions
 *
 * @author BennieKrijger <benniekrijger@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-geo-shape-query.html
 */
class GeoShapeProvided extends AbstractGeoShape
{
    const TYPE_ENVELOPE = 'envelope';
    const TYPE_MULTIPOINT = 'multipoint';
    const TYPE_POINT = 'point';
    const TYPE_MULTIPOLYGON = 'multipolygon';
    const TYPE_LINESTRING = 'linestring';
    const TYPE_POLYGON = 'polygon';

    /**
     * Type of the geo_shape.
     *
     * @var string
     */
    protected $_shapeType;

    /**
     * Coordinates making up geo_shape.
     *
     * @var array Coordinates making up geo_shape
     */
    protected $_coordinates;

    /**
     * Construct geo_shape query.
     *
     * @param string $path        The path/field of the shape searched
     * @param array  $coordinates Points making up the shape
     * @param string $shapeType   Type of the geo_shape:
     *                            point, envelope, linestring, polygon,
     *                            multipoint or multipolygon
     */
    public function __construct($path, array $coordinates, $shapeType = self::TYPE_ENVELOPE)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts query to array.
     *
     * @see \Elastica\Query\AbstractQuery::toArray()
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'geo_shape' => array(
                $this->_path => array(
                    'shape' => array(
                        'type' => $this->_shapeType,
                        'coordinates' => $this->_coordinates,
                        'relation' => $this->_relation,
                    ),
                ),
            ),
        );
    }
}
