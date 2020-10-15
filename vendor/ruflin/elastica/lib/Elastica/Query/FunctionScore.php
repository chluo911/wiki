<?php

namespace Elastica\Query;

use Elastica\Exception\DeprecatedException;
use Elastica\Exception\InvalidException;
use Elastica\Filter\AbstractFilter;
use Elastica\Script\AbstractScript;

/**
 * Class FunctionScore.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-function-score-query.html
 */
class FunctionScore extends AbstractQuery
{
    const BOOST_MODE_MULTIPLY = 'multiply';
    const BOOST_MODE_REPLACE = 'replace';
    const BOOST_MODE_SUM = 'sum';
    const BOOST_MODE_AVERAGE = 'avg';
    const BOOST_MODE_MAX = 'max';
    const BOOST_MODE_MIN = 'min';

    const SCORE_MODE_MULTIPLY = 'multiply';
    const SCORE_MODE_SUM = 'sum';
    const SCORE_MODE_AVERAGE = 'avg';
    const SCORE_MODE_FIRST = 'first';
    const SCORE_MODE_MAX = 'max';
    const SCORE_MODE_MIN = 'min';

    const DECAY_GAUSS = 'gauss';
    const DECAY_EXPONENTIAL = 'exp';
    const DECAY_LINEAR = 'linear';

    const FIELD_VALUE_FACTOR_MODIFIER_NONE = 'none';
    const FIELD_VALUE_FACTOR_MODIFIER_LOG = 'log';
    const FIELD_VALUE_FACTOR_MODIFIER_LOG1P = 'log1p';
    const FIELD_VALUE_FACTOR_MODIFIER_LOG2P = 'log2p';
    const FIELD_VALUE_FACTOR_MODIFIER_LN = 'ln';
    const FIELD_VALUE_FACTOR_MODIFIER_LN1P = 'ln1p';
    const FIELD_VALUE_FACTOR_MODIFIER_LN2P = 'ln2p';
    const FIELD_VALUE_FACTOR_MODIFIER_SQUARE = 'square';
    const FIELD_VALUE_FACTOR_MODIFIER_SQRT = 'sqrt';
    const FIELD_VALUE_FACTOR_MODIFIER_RECIPROCAL = 'reciprocal';

    protected $_functions = array();

    /**
     * Set the child query for this function_score query.
     *
     * @param AbstractQuery $query
     *
     * @return $this
     */
    public function setQuery(AbstractQuery $query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param AbstractFilter $filter
     *
     * @deprecated Elastica\Query\FunctionScore::setFilter is deprecated. Use setQuery instead
     *
     * @return $this
     */
    public function setFilter(AbstractFilter $filter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a function to the function_score query.
     *
     * @param string        $functionType   valid values are DECAY_* constants and script_score
     * @param array|float   $functionParams the body of the function. See documentation for proper syntax.
     * @param AbstractQuery $filter         optional filter to apply to the function
     * @param float         $weight         function weight
     *
     * @return $this
     */
    public function addFunction($functionType, $functionParams, $filter = null, $weight = null)
    {
        $function = array(
            $functionType => $functionParams,
        );

        if (!is_null($filter)) {
            if ($filter instanceof AbstractFilter) {
                trigger_error('Deprecated: Elastica\Query\FunctionScore::addFunction passing AbstractFilter is deprecated. Pass AbstractQuery instead.', E_USER_DEPRECATED);
            } elseif (!($filter instanceof AbstractQuery)) {
                throw new InvalidException('Filter must be instance of AbstractQuery');
            }

            $function['filter'] = $filter;
        }

        if ($weight !== null) {
            $function['weight'] = $weight;
        }

        $this->_functions[] = $function;

        return $this;
    }

    /**
     * Add a script_score function to the query.
     *
     * @param \Elastica\Script\AbstractScript $script a Script object
     * @param AbstractQuery                   $filter an optional filter to apply to the function
     * @param float                           $weight the weight of the function
     *
     * @return $this
     */
    public function addScriptScoreFunction(AbstractScript $script, $filter = null, $weight = null)
    {
        if (null !== $filter) {
            if ($filter instanceof AbstractFilter) {
                trigger_error('Deprecated: Elastica\Query\FunctionScore::addScriptScoreFunction passing AbstractFilter is deprecated. Pass AbstractQuery instead.', E_USER_DEPRECATED);
            } elseif (!($filter instanceof AbstractQuery)) {
                throw new InvalidException('Filter must be instance of AbstractQuery');
            }
        }

        return $this->addFunction('script_score', $script, $filter, $weight);
    }

    /**
     * Add a decay function to the query.
     *
     * @param string        $function see DECAY_* constants for valid options
     * @param string        $field    the document field on which to perform the decay function
     * @param string        $origin   the origin value for this decay function
     * @param string        $scale    a scale to define the rate of decay for this function
     * @param string        $offset   If defined, this function will only be computed for documents with a distance from the origin greater than this value
     * @param float         $decay    optionally defines how documents are scored at the distance given by the $scale parameter
     * @param float         $weight   optional factor by which to multiply the score at the value provided by the $scale parameter
     * @param AbstractQuery $filter   a filter associated with this function
     *
     * @return $this
     */
    public function addDecayFunction(
        $function,
        $field,
        $origin,
        $scale,
        $offset = null,
        $decay = null,
        $weight = null,
        $filter = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addFieldValueFactorFunction(
        $field,
        $factor = null,
        $modifier = null,
        $missing = null,
        $weight = null,
        $filter = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a boost_factor function to the query.
     *
     * @param float         $boostFactor the boost factor value
     * @param AbstractQuery $filter      a filter associated with this function
     *
     * @deprecated Use addWeightFunction instead. This method will be removed in further Elastica releases
     */
    public function addBoostFactorFunction($boostFactor, $filter = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param float         $weight the weight of the function
     * @param AbstractQuery $filter a filter associated with this function
     */
    public function addWeightFunction($weight, $filter = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a random_score function to the query.
     *
     * @param number        $seed   the seed value
     * @param AbstractQuery $filter a filter associated with this function
     * @param float         $weight an optional boost value associated with this function
     */
    public function addRandomScoreFunction($seed, $filter = null, $weight = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set an overall boost value for this query.
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
     * Restrict the combined boost of the function_score query and its child query.
     *
     * @param float $maxBoost
     *
     * @return $this
     */
    public function setMaxBoost($maxBoost)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The boost mode determines how the score of this query is combined with that of the child query.
     *
     * @param string $mode see BOOST_MODE_* constants for valid options. Default is multiply.
     *
     * @return $this
     */
    public function setBoostMode($mode)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If set, this query will return results in random order.
     *
     * @param int $seed Set a seed value to return results in the same random order for consistent pagination.
     *
     * @return $this
     */
    public function setRandomScore($seed = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the score method.
     *
     * @param string $mode see SCORE_MODE_* constants for valid options. Default is multiply.
     *
     * @return $this
     */
    public function setScoreMode($mode)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set min_score option.
     *
     * @param float $minScore
     *
     * @return $this
     */
    public function setMinScore($minScore)
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
        if (sizeof($this->_functions)) {
            $this->setParam('functions', $this->_functions);
        }

        return parent::toArray();
    }
}
