<?php

namespace Elastica\Query;

/**
 * Class Common.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-common-terms-query.html
 */
class Common extends AbstractQuery
{
    const OPERATOR_AND = 'and';
    const OPERATOR_OR = 'or';

    /**
     * @var string
     */
    protected $_field;

    /**
     * @var array
     */
    protected $_queryParams = array();

    /**
     * @param string $field           the field on which to query
     * @param string $query           the query string
     * @param float  $cutoffFrequency percentage in decimal form (.001 == 0.1%)
     */
    public function __construct($field, $query, $cutoffFrequency)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the field on which to query.
     *
     * @param string $field the field on which to query
     *
     * @return $this
     */
    public function setField($field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the query string for this query.
     *
     * @param string $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the frequency below which terms will be put in the low frequency group.
     *
     * @param float $frequency percentage in decimal form (.001 == 0.1%)
     *
     * @return $this
     */
    public function setCutoffFrequency($frequency)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the logic operator for low frequency terms.
     *
     * @param string $operator see OPERATOR_* class constants for options
     *
     * @return $this
     */
    public function setLowFrequencyOperator($operator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the logic operator for high frequency terms.
     *
     * @param string $operator see OPERATOR_* class constants for options
     *
     * @return $this
     */
    public function setHighFrequencyOperator($operator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the minimum_should_match parameter.
     *
     * @param int|string $minimum minimum number of low frequency terms which must be present
     *
     * @return $this
     *
     * @link Possible values for minimum_should_match https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-minimum-should-match.html
     */
    public function setMinimumShouldMatch($minimum)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the boost for this query.
     *
     * @param float $boost
     *
     * @return $this
     */
    public function setBoost($boost)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the analyzer for this query.
     *
     * @param string $analyzer
     *
     * @return $this
     */
    public function setAnalyzer($analyzer)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enable / disable computation of score factor based on the fraction of all query terms contained in the document.
     *
     * @param bool $disable disable_coord is false by default
     *
     * @return $this
     */
    public function setDisableCoord($disable = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set a parameter in the body of this query.
     *
     * @param string $key   parameter key
     * @param mixed  $value parameter value
     *
     * @return $this
     */
    public function setQueryParam($key, $value)
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
        $this->setParam($this->_field, $this->_queryParams);

        return parent::toArray();
    }
}
