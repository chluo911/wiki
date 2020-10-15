<?php

namespace Elastica\Query;

use Elastica\Document;
use Elastica\Exception\DeprecatedException;

/**
 * More Like This query.
 *
 * @author Raul Martinez, Jr <juneym@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-mlt-query.html
 */
class MoreLikeThis extends AbstractQuery
{
    /**
     * Set fields to which to restrict the mlt query.
     *
     * @param array $fields Field names
     *
     * @return \Elastica\Query\MoreLikeThis Current object
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
     * Set document ids for the mlt query.
     *
     * @param array $ids Document ids
     *
     * @deprecated Option "ids" deprecated as of ES 2.0.0-beta1 and will be removed in further Elastica releases. Use "like" instead.
     
     * @return \Elastica\Query\MoreLikeThis Current object
     */
    public function setIds(array $ids)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the "like" value.
     *
     * @param string|Document $like
     *
     * @return $this
     */
    public function setLike($like)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the "like_text" value.
     *
     * @param string $likeText
     *
     * @deprecated Option "like_text" deprecated as of ES 2.0.0-beta1 and will be removed at further Elastica releases. Use "like" instead.
     
     * @return $this
     */
    public function setLikeText($likeText)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set boost.
     *
     * @param float $boost Boost value
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
     * Set max_query_terms.
     *
     * @param int $maxQueryTerms Max query terms value
     *
     * @return $this
     */
    public function setMaxQueryTerms($maxQueryTerms)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set percent terms to match.
     *
     * @param float $percentTermsToMatch Percentage
     *
     * @return $this
     *
     * @deprecated Option "percent_terms_to_match" deprecated as of ES 1.5 and will be removed in further Elastica releases. Use "minimum_should_match" instead.
     */
    public function setPercentTermsToMatch($percentTermsToMatch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set min term frequency.
     *
     * @param int $minTermFreq
     *
     * @return $this
     */
    public function setMinTermFrequency($minTermFreq)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * set min document frequency.
     *
     * @param int $minDocFreq
     *
     * @return $this
     */
    public function setMinDocFrequency($minDocFreq)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * set max document frequency.
     *
     * @param int $maxDocFreq
     *
     * @return $this
     */
    public function setMaxDocFrequency($maxDocFreq)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set min word length.
     *
     * @param int $minWordLength
     *
     * @return $this
     */
    public function setMinWordLength($minWordLength)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set max word length.
     *
     * @param int $maxWordLength
     *
     * @return $this
     */
    public function setMaxWordLength($maxWordLength)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set boost terms.
     *
     * @param bool $boostTerms
     *
     * @return $this
     */
    public function setBoostTerms($boostTerms)
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

    /**
     * Set stop words.
     *
     * @param array $stopWords
     *
     * @return $this
     */
    public function setStopWords(array $stopWords)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set minimum_should_match option.
     *
     * @param int|string $minimumShouldMatch
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

    public function toArray()
    {
        $array = parent::toArray();

        // If _id is provided, perform MLT on an existing document from the index
        // If _source is provided, perform MLT on a document provided as an input
        if (!empty($array['more_like_this']['like']['_id'])) {
            $doc = $array['more_like_this']['like'];
            $doc = array_intersect_key($doc, array('_index' => 1, '_type' => 1, '_id' => 1));
            $array['more_like_this']['like'] = $doc;
        } elseif (!empty($array['more_like_this']['like']['_source'])) {
            $doc = $array['more_like_this']['like'];
            $doc['doc'] = $array['more_like_this']['like']['_source'];
            unset($doc['_id']);
            unset($doc['_source']);
            $array['more_like_this']['like'] = $doc;
        }

        return $array;
    }
}
