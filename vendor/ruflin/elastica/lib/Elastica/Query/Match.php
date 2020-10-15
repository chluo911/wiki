<?php

namespace Elastica\Query;

/**
 * Match query.
 *
 * @author F21
 * @author WONG Wing Lun <luiges90@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-match-query.html
 */
class Match extends AbstractQuery
{
    const ZERO_TERM_NONE = 'none';
    const ZERO_TERM_ALL = 'all';

    /**
     * @param string $field
     * @param mixed  $values
     */
    public function __construct($field = null, $values = null)
    {
        if ($field !== null && $values !== null) {
            $this->setParam($field, $values);
        }
    }

    /**
     * Sets a param for the message array.
     *
     * @param string $field
     * @param mixed  $values
     *
     * @return $this
     */
    public function setField($field, $values)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a param for the given field.
     *
     * @param string $field
     * @param string $key
     * @param string $value
     *
     * @return $this
     */
    public function setFieldParam($field, $key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the query string.
     *
     * @param string $field
     * @param string $query
     *
     * @return $this
     */
    public function setFieldQuery($field, $query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field type.
     *
     * @param string $field
     * @param string $type
     *
     * @return $this
     */
    public function setFieldType($field, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field operator.
     *
     * @param string $field
     * @param string $operator
     *
     * @return $this
     */
    public function setFieldOperator($field, $operator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field analyzer.
     *
     * @param string $field
     * @param string $analyzer
     *
     * @return $this
     */
    public function setFieldAnalyzer($field, $analyzer)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field boost value.
     *
     * If not set, defaults to 1.0.
     *
     * @param string $field
     * @param float  $boost
     *
     * @return $this
     */
    public function setFieldBoost($field, $boost = 1.0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field minimum should match.
     *
     * @param string     $field
     * @param int|string $minimumShouldMatch
     *
     * @return $this
     *
     * @link Possible values for minimum_should_match https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-minimum-should-match.html
     */
    public function setFieldMinimumShouldMatch($field, $minimumShouldMatch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field fuzziness.
     *
     * @param string $field
     * @param mixed  $fuzziness
     *
     * @return $this
     */
    public function setFieldFuzziness($field, $fuzziness)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field fuzzy rewrite.
     *
     * @param string $field
     * @param string $fuzzyRewrite
     *
     * @return $this
     */
    public function setFieldFuzzyRewrite($field, $fuzzyRewrite)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field prefix length.
     *
     * @param string $field
     * @param int    $prefixLength
     *
     * @return $this
     */
    public function setFieldPrefixLength($field, $prefixLength)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field max expansions.
     *
     * @param string $field
     * @param int    $maxExpansions
     *
     * @return $this
     */
    public function setFieldMaxExpansions($field, $maxExpansions)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set zero terms query.
     *
     * If not set, default to 'none'
     *
     * @param string $field
     * @param string $zeroTermQuery
     *
     * @return $this
     */
    public function setFieldZeroTermsQuery($field, $zeroTermQuery = 'none')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set cutoff frequency.
     *
     * @param string $field
     * @param float  $cutoffFrequency
     *
     * @return $this
     */
    public function setFieldCutoffFrequency($field, $cutoffFrequency)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
