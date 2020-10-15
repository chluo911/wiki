<?php

namespace Elastica;

use Elastica\Exception\InvalidException;

/**
 * Elastica result set.
 *
 * List of all hits that are returned for a search on elasticsearch
 * Result set implements iterator
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
class ResultSet implements \Iterator, \Countable, \ArrayAccess
{
    /**
     * Class for the static create method to use.
     *
     * @var string
     */
    protected static $_class = 'Elastica\\ResultSet';

    /**
     * Results.
     *
     * @var array Results
     */
    protected $_results = array();

    /**
     * Current position.
     *
     * @var int Current position
     */
    protected $_position = 0;

    /**
     * Response.
     *
     * @var \Elastica\Response Response object
     */
    protected $_response = null;

    /**
     * Query.
     *
     * @var \Elastica\Query Query object
     */
    protected $_query;

    /**
     * @var int
     */
    protected $_took = 0;

    /**
     * @var bool
     */
    protected $_timedOut = false;

    /**
     * @var int
     */
    protected $_totalHits = 0;

    /**
     * @var float
     */
    protected $_maxScore = 0;

    /**
     * Constructs ResultSet object.
     *
     * @param \Elastica\Response $response Response object
     * @param \Elastica\Query    $query    Query object
     */
    public function __construct(Response $response, Query $query)
    {
        $this->rewind();
        $this->_init($response);
        $this->_query = $query;
    }

    /**
     * Creates a new ResultSet object. Can be configured to return a different
     * implementation of the ResultSet class.
     *
     * @param Response $response
     * @param Query    $query
     *
     * @return ResultSet
     */
    public static function create(Response $response, Query $query)
    {
        $class = static::$_class;

        return new $class($response, $query);
    }

    /**
     * Sets the class to be used for the static create method.
     *
     * @param string $class
     */
    public static function setClass($class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads all data into the results object (initialisation).
     *
     * @param \Elastica\Response $response Response object
     */
    protected function _init(Response $response)
    {
        $this->_response = $response;
        $result = $response->getData();
        $this->_totalHits = isset($result['hits']['total']) ? $result['hits']['total'] : 0;
        $this->_maxScore = isset($result['hits']['max_score']) ? $result['hits']['max_score'] : 0;
        $this->_took = isset($result['took']) ? $result['took'] : 0;
        $this->_timedOut = !empty($result['timed_out']);
        if (isset($result['hits']['hits'])) {
            foreach ($result['hits']['hits'] as $hit) {
                $this->_results[] = new Result($hit);
            }
        }
    }

    /**
     * Returns all results.
     *
     * @return Result[] Results
     */
    public function getResults()
    {
        return $this->_results;
    }

    /**
     * Returns all Documents.
     *
     * @return array Documents \Elastica\Document
     */
    public function getDocuments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns true if the response contains suggestion results; false otherwise.
     *
     * @return bool
     */
    public function hasSuggests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return all suggests.
     *
     * @return array suggest results
     */
    public function getSuggests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether aggregations exist.
     *
     * @return bool Aggregation existence
     */
    public function hasAggregations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns all aggregation results.
     *
     * @return array
     */
    public function getAggregations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Retrieve a specific aggregation from this result set.
     *
     * @param string $name the name of the desired aggregation
     *
     * @throws Exception\InvalidException if an aggregation by the given name cannot be found
     *
     * @return array
     */
    public function getAggregation($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the total number of found hits.
     *
     * @return int Total hits
     */
    public function getTotalHits()
    {
        return (int) $this->_totalHits;
    }

    /**
     * Returns the max score of the results found.
     *
     * @return float Max Score
     */
    public function getMaxScore()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the total number of ms for this search to complete.
     *
     * @return int Total time
     */
    public function getTotalTime()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns true iff the query has timed out.
     *
     * @return bool Timed out
     */
    public function hasTimedOut()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns response object.
     *
     * @return \Elastica\Response Response object
     */
    public function getResponse()
    {
        return $this->_response;
    }

    /**
     * @return \Elastica\Query
     */
    public function getQuery()
    {
        return $this->_query;
    }

    /**
     * Returns size of current set.
     *
     * @return int Size of set
     */
    public function count()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns size of current suggests.
     *
     * @return int Size of suggests
     */
    public function countSuggests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the current object of the set.
     *
     * @return \Elastica\Result|bool Set object or false if not valid (no more entries)
     */
    public function current()
    {
        if ($this->valid()) {
            return $this->_results[$this->key()];
        } else {
            return false;
        }
    }

    /**
     * Sets pointer (current) to the next item of the set.
     */
    public function next()
    {
        ++$this->_position;

        return $this->current();
    }

    /**
     * Returns the position of the current entry.
     *
     * @return int Current position
     */
    public function key()
    {
        return $this->_position;
    }

    /**
     * Check if an object exists at the current position.
     *
     * @return bool True if object exists
     */
    public function valid()
    {
        return isset($this->_results[$this->key()]);
    }

    /**
     * Resets position to 0, restarts iterator.
     */
    public function rewind()
    {
        $this->_position = 0;
    }

    /**
     * Whether a offset exists.
     *
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param int $offset
     *
     * @return bool true on success or false on failure.
     */
    public function offsetExists($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Offset to retrieve.
     *
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param int $offset
     *
     * @throws Exception\InvalidException If offset doesn't exist
     *
     * @return Result|null
     */
    public function offsetGet($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Offset to set.
     *
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param int    $offset
     * @param Result $value
     *
     * @throws Exception\InvalidException
     */
    public function offsetSet($offset, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Offset to unset.
     *
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param int $offset
     */
    public function offsetUnset($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
