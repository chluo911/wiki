<?php

namespace Elastica\Multi;

use Elastica\Client;
use Elastica\JSON;
use Elastica\Request;
use Elastica\Search as BaseSearch;

/**
 * Elastica multi search.
 *
 * @author munkie
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-multi-search.html
 */
class Search
{
    /**
     * @var array|\Elastica\Search[]
     */
    protected $_searches = array();

    /**
     * @var array
     */
    protected $_options = array();

    /**
     * @var \Elastica\Client
     */
    protected $_client;

    /**
     * Constructs search object.
     *
     * @param \Elastica\Client $client Client object
     */
    public function __construct(Client $client)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return \Elastica\Client
     */
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * @param \Elastica\Client $client
     *
     * @return $this
     */
    public function setClient(Client $client)
    {
        $this->_client = $client;

        return $this;
    }

    /**
     * @return $this
     */
    public function clearSearches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \Elastica\Search $search
     * @param string           $key    Optional key
     *
     * @return $this
     */
    public function addSearch(BaseSearch $search, $key = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array|\Elastica\Search[] $searches
     *
     * @return $this
     */
    public function addSearches(array $searches)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array|\Elastica\Search[] $searches
     *
     * @return $this
     */
    public function setSearches(array $searches)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array|\Elastica\Search[]
     */
    public function getSearches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $searchType
     *
     * @return $this
     */
    public function setSearchType($searchType)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return \Elastica\Multi\ResultSet
     */
    public function search()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    protected function _getData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \Elastica\Search $search
     *
     * @return string
     */
    protected function _getSearchData(BaseSearch $search)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \Elastica\Search $search
     *
     * @return array
     */
    protected function _getSearchDataHeader(BaseSearch $search)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
