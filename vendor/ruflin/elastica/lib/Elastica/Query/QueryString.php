<?php

namespace Elastica\Query;

use Elastica\Exception\InvalidException;

/**
 * QueryString query.
 *
 * @author   Nicolas Ruflin <spam@ruflin.com>, Jasper van Wanrooy <jasper@vanwanrooy.net>
 *
 * @link     https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html
 */
class QueryString extends AbstractQuery
{
    /**
     * Query string.
     *
     * @var string Query string
     */
    protected $_queryString = '';

    /**
     * Creates query string object. Calls setQuery with argument.
     *
     * @param string $queryString OPTIONAL Query string for object
     */
    public function __construct($queryString = '')
    {
        $this->setQuery($queryString);
    }

    /**
     * Sets a new query string for the object.
     *
     * @param string $query Query string
     *
     * @throws \Elastica\Exception\InvalidException If given parameter is not a string
     *
     * @return $this
     */
    public function setQuery($query = '')
    {
        if (!is_string($query)) {
            throw new InvalidException('Parameter has to be a string');
        }

        return $this->setParam('query', $query);
    }

    /**
     * Sets the default field.
     *
     * If no field is set, _all is chosen
     *
     * @param string $field Field
     *
     * @return $this
     */
    public function setDefaultField($field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the default operator AND or OR.
     *
     * If no operator is set, OR is chosen
     *
     * @param string $operator Operator
     *
     * @return $this
     */
    public function setDefaultOperator($operator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the analyzer to analyze the query with.
     *
     * @param string $analyzer Analyser to use
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
     * Sets the parameter to allow * and ? as first characters.
     *
     * If not set, defaults to true.
     *
     * @param bool $allow
     *
     * @return $this
     */
    public function setAllowLeadingWildcard($allow = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the parameter to enable the position increments in result queries.
     *
     * If not set, defaults to true.
     *
     * @param bool $enabled
     *
     * @return $this
     */
    public function setEnablePositionIncrements($enabled = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the fuzzy prefix length parameter.
     *
     * If not set, defaults to 0.
     *
     * @param int $length
     *
     * @return $this
     */
    public function setFuzzyPrefixLength($length = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the fuzzy minimal similarity parameter.
     *
     * If not set, defaults to 0.5
     *
     * @param float $minSim
     *
     * @return $this
     */
    public function setFuzzyMinSim($minSim = 0.5)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the phrase slop.
     *
     * If zero, exact phrases are required.
     * If not set, defaults to zero.
     *
     * @param int $phraseSlop
     *
     * @return $this
     */
    public function setPhraseSlop($phraseSlop = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the boost value of the query.
     *
     * If not set, defaults to 1.0.
     *
     * @param float $boost
     *
     * @return $this
     */
    public function setBoost($boost = 1.0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Allows analyzing of wildcard terms.
     *
     * If not set, defaults to true
     *
     * @param bool $analyze
     *
     * @return $this
     */
    public function setAnalyzeWildcard($analyze = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the param to automatically generate phrase queries.
     *
     * If not set, defaults to true.
     *
     * @param bool $autoGenerate
     *
     * @return $this
     */
    public function setAutoGeneratePhraseQueries($autoGenerate = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the fields. If no fields are set, _all is chosen.
     *
     * @param array $fields Fields
     *
     * @throws \Elastica\Exception\InvalidException If given parameter is not an array
     *
     * @return $this
     */
    public function setFields(array $fields)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Whether to use bool or dis_max queries to internally combine results for multi field search.
     *
     * @param bool $value Determines whether to use
     *
     * @return $this
     */
    public function setUseDisMax($value = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * When using dis_max, the disjunction max tie breaker.
     *
     * If not set, defaults to 0.
     *
     * @param int $tieBreaker
     *
     * @return $this
     */
    public function setTieBreaker($tieBreaker = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set a re-write condition. See https://github.com/elasticsearch/elasticsearch/issues/1186 for additional information.
     *
     * @param string $rewrite
     *
     * @return $this
     */
    public function setRewrite($rewrite = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set timezone option.
     *
     * @param string $timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        return $this->setParam('time_zone', $timezone);
    }

    /**
     * Converts query to array.
     *
     * @see \Elastica\Query\AbstractQuery::toArray()
     *
     * @return array Query array
     */
    public function toArray()
    {
        return array('query_string' => array_merge(array('query' => $this->_queryString), $this->getParams()));
    }
}
