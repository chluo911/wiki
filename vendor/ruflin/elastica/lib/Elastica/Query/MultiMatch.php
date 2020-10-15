<?php

namespace Elastica\Query;

/**
 * Multi Match.
 *
 * @author Rodolfo Adhenawer Campagnoli Moraes <adhenawer@gmail.com>
 * @author Wong Wing Lun <luiges90@gmail.com>
 * @author Tristan Maindron <tmaindron@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-multi-match-query.html
 */
class MultiMatch extends AbstractQuery
{
    const TYPE_BEST_FIELDS = 'best_fields';
    const TYPE_MOST_FIELDS = 'most_fields';
    const TYPE_CROSS_FIELDS = 'cross_fields';
    const TYPE_PHRASE = 'phrase';
    const TYPE_PHRASE_PREFIX = 'phrase_prefix';

    const OPERATOR_OR = 'or';
    const OPERATOR_AND = 'and';

    const ZERO_TERM_NONE = 'none';
    const ZERO_TERM_ALL = 'all';

    const FUZZINESS_AUTO = 'AUTO';

    /**
     * Sets the query.
     *
     * @param string $query Query
     *
     * @return $this
     */
    public function setQuery($query = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets Fields to be used in the query.
     *
     * @param array $fields Fields
     *
     * @return $this
     */
    public function setFields($fields = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets use dis max indicating to either create a dis_max query or a bool query.
     *
     * If not set, defaults to true.
     *
     * @param bool $useDisMax
     *
     * @return $this
     */
    public function setUseDisMax($useDisMax = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets tie breaker to multiplier value to balance the scores between lower and higher scoring fields.
     *
     * If not set, defaults to 0.0.
     *
     * @param float $tieBreaker
     *
     * @return $this
     */
    public function setTieBreaker($tieBreaker = 0.0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets operator for Match Query.
     *
     * If not set, defaults to 'or'
     *
     * @param string $operator
     *
     * @return $this
     */
    public function setOperator($operator = 'or')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set field minimum should match for Match Query.
     *
     * @param mixed $minimumShouldMatch
     *
     * @return $this
     */
    public function setMinimumShouldMatch($minimumShouldMatch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set zero terms query for Match Query.
     *
     * If not set, default to 'none'
     *
     * @param string $zeroTermQuery
     *
     * @return $this
     */
    public function setZeroTermsQuery($zeroTermQuery = 'none')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set cutoff frequency for Match Query.
     *
     * @param float $cutoffFrequency
     *
     * @return $this
     */
    public function setCutoffFrequency($cutoffFrequency)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set fuzziness.
     *
     * @param float|string $fuzziness
     *
     * @return $this
     */
    public function setFuzziness($fuzziness)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set prefix length.
     *
     * @param int $prefixLength
     *
     * @return $this
     */
    public function setPrefixLength($prefixLength)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set max expansions.
     *
     * @param int $maxExpansions
     *
     * @return $this
     */
    public function setMaxExpansions($maxExpansions)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set analyzer.
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
}
