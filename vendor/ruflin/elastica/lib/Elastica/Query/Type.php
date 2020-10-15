<?php

namespace Elastica\Query;

/**
 * Type Query.
 *
 * @author James Wilson <jwilson556@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-type-query.html
 */
class Type extends AbstractQuery
{
    /**
     * Type name.
     *
     * @var string
     */
    protected $_type = null;

    /**
     * Construct Type Query.
     *
     * @param string $type Type name
     */
    public function __construct($type = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ads a field with arguments to the range query.
     *
     * @param string $typeName Type name
     *
     * @return $this
     */
    public function setType($typeName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert object to array.
     *
     * @see \Elastica\Query\AbstractQuery::toArray()
     *
     * @return array Query array
     */
    public function toArray()
    {
        return array(
            'type' => array('value' => $this->_type),
        );
    }
}
