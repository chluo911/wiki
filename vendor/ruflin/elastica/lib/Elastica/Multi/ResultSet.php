<?php

namespace Elastica\Multi;

use Elastica\Exception\InvalidException;
use Elastica\Response;
use Elastica\ResultSet as BaseResultSet;
use Elastica\Search as BaseSearch;

/**
 * Elastica multi search result set
 * List of result sets for each search request.
 *
 * @author munkie
 */
class ResultSet implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * Result Sets.
     *
     * @var array|\Elastica\ResultSet[] Result Sets
     */
    protected $_resultSets = array();

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
    protected $_response;

    /**
     * Constructs ResultSet object.
     *
     * @param \Elastica\Response       $response
     * @param array|\Elastica\Search[] $searches
     */
    public function __construct(Response $response, array $searches)
    {
        $this->rewind();
        $this->_init($response, $searches);
    }

    /**
     * @param \Elastica\Response       $response
     * @param array|\Elastica\Search[] $searches
     *
     * @throws \Elastica\Exception\InvalidException
     */
    protected function _init(Response $response, array $searches)
    {
        $this->_response = $response;
        $responseData = $response->getData();

        if (isset($responseData['responses']) && is_array($responseData['responses'])) {
            reset($searches);
            foreach ($responseData['responses'] as $key => $responseData) {
                $currentSearch = each($searches);

                if ($currentSearch === false) {
                    throw new InvalidException('No result found for search #'.$key);
                } elseif (!$currentSearch['value'] instanceof BaseSearch) {
                    throw new InvalidException('Invalid object for search #'.$key.' provided. Should be Elastica\Search');
                }

                $search = $currentSearch['value'];
                $query = $search->getQuery();

                $response = new Response($responseData);
                $this->_resultSets[$currentSearch['key']] = new BaseResultSet($response, $query);
            }
        }
    }

    /**
     * @return array|\Elastica\ResultSet[]
     */
    public function getResultSets()
    {
        return $this->_resultSets;
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
     * There is at least one result set with error.
     *
     * @return bool
     */
    public function hasError()
    {
        foreach ($this->getResultSets() as $resultSet) {
            if ($resultSet->getResponse()->hasError()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return bool|\Elastica\ResultSet
     */
    public function current()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     */
    public function next()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->_position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     */
    public function rewind()
    {
        $this->_position = 0;
    }

    /**
     * @return int
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
     * @param string|int $offset
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
     * @param mixed $offset
     *
     * @return mixed Can return all value types.
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
     * @param mixed $offset
     * @param mixed $value
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
     * @param mixed $offset
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
