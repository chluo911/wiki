<?php

namespace Elastica\Suggest;

use Elastica\Suggest\CandidateGenerator\AbstractCandidateGenerator;

/**
 * Class Phrase.
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-suggesters-phrase.html
 */
class Phrase extends AbstractSuggest
{
    /**
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
     * Set the max size of the n-grams (shingles) in the field.
     *
     * @param int $size
     *
     * @return $this
     */
    public function setGramSize($size)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the likelihood of a term being misspelled even if the term exists in the dictionary.
     *
     * @param float $likelihood Defaults to 0.95, meaning 5% of the words are misspelled.
     *
     * @return $this
     */
    public function setRealWordErrorLikelihood($likelihood)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the factor applied to the input phrases score to be used as a threshold for other suggestion candidates.
     * Only candidates which score higher than this threshold will be included in the result.
     *
     * @param float $confidence Defaults to 1.0.
     *
     * @return $this
     */
    public function setConfidence($confidence)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the maximum percentage of the terms considered to be misspellings in order to form a correction.
     *
     * @param float $max
     *
     * @return $this
     */
    public function setMaxErrors($max)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $separator
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set suggestion highlighting.
     *
     * @param string $preTag
     * @param string $postTag
     *
     * @return $this
     */
    public function setHighlight($preTag, $postTag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param float $discount
     *
     * @return $this
     */
    public function setStupidBackoffSmoothing($discount = 0.4)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param float $alpha
     *
     * @return $this
     */
    public function setLaplaceSmoothing($alpha = 0.5)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param float $trigramLambda
     * @param float $bigramLambda
     * @param float $unigramLambda
     *
     * @return $this
     */
    public function setLinearInterpolationSmoothing($trigramLambda, $bigramLambda, $unigramLambda)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $model  the name of the smoothing model
     * @param array  $params
     *
     * @return $this
     */
    public function setSmoothingModel($model, array $params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param AbstractCandidateGenerator $generator
     *
     * @return $this
     */
    public function addCandidateGenerator(AbstractCandidateGenerator $generator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $array = parent::toArray();

        $baseName = $this->_getBaseName();

        if (isset($array[$baseName]['candidate_generator'])) {
            $generator = $array[$baseName]['candidate_generator'];
            unset($array[$baseName]['candidate_generator']);

            $keys = array_keys($generator);
            $values = array_values($generator);

            if (!isset($array[$baseName][$keys[0]])) {
                $array[$baseName][$keys[0]] = array();
            }

            $array[$baseName][$keys[0]][] = $values[0];
        }

        return $array;
    }
}
