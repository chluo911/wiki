<?php

namespace Elastica\Aggregation;

use Elastica\Exception\InvalidException;

/**
 * Class IpRange.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-aggregations-bucket-iprange-aggregation.html
 */
class IpRange extends AbstractAggregation
{
    /**
     * @param string $name  the name of this aggregation
     * @param string $field the field on which to perform this aggregation
     */
    public function __construct($name, $field)
    {
        parent::__construct($name);
        $this->setField($field);
    }

    /**
     * Set the field for this aggregation.
     *
     * @param string $field the name of the document field on which to perform this aggregation
     *
     * @return $this
     */
    public function setField($field)
    {
        return $this->setParam('field', $field);
    }

    /**
     * Add an ip range to this aggregation.
     *
     * @param string $fromValue a valid ipv4 address. Low end of this range, exclusive (greater than)
     * @param string $toValue   a valid ipv4 address. High end of this range, exclusive (less than)
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return $this
     */
    public function addRange($fromValue = null, $toValue = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add an ip range in the form of a CIDR mask.
     *
     * @param string $mask a valid CIDR mask
     *
     * @return $this
     */
    public function addMaskRange($mask)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
