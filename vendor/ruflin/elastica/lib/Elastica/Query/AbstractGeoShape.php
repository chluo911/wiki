<?php

namespace Elastica\Query;

/**
 * geo_shape query.
 *
 * Query pre-indexed shape definitions
 *
 * @author Bennie Krijger <benniekrijger@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-geo-shape-query.html
 */
abstract class AbstractGeoShape extends AbstractQuery
{
    const RELATION_INTERSECT = 'intersects';
    const RELATION_DISJOINT = 'disjoint';
    const RELATION_CONTAINS = 'within';

    /**
     * @var string
     *
     * elasticsearch path of the pre-indexed shape
     */
    protected $_path;

    /**
     * @var string
     *
     * the relation of the 2 shaped: intersects, disjoint, within
     */
    protected $_relation = self::RELATION_INTERSECT;

    /**
     * @param string $relation
     *
     * @return $this
     */
    public function setRelation($relation)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function getRelation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
