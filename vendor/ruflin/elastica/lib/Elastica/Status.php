<?php

namespace Elastica;

use Elastica\Exception\ResponseException;

/**
 * Elastica general status.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-status.html
 */
class Status
{
    /**
     * Contains all status infos.
     *
     * @var \Elastica\Response Response object
     */
    protected $_response = null;

    /**
     * Data.
     *
     * @var array Data
     */
    protected $_data = null;

    /**
     * Client object.
     *
     * @var \Elastica\Client Client object
     */
    protected $_client = null;

    /**
     * Constructs Status object.
     *
     * @param \Elastica\Client $client Client object
     */
    public function __construct(Client $client)
    {
        $this->_client = $client;
    }

    /**
     * Returns status data.
     *
     * @return array Status data
     */
    public function getData()
    {
        if (is_null($this->_data)) {
            $this->refresh();
        }

        return $this->_data;
    }

    /**
     * Returns a list of the existing index names.
     *
     * @return array Index names list
     */
    public function getIndexNames()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if the given index exists.
     *
     * @param string $name Index name to check
     *
     * @return bool True if index exists
     */
    public function indexExists($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if the given alias exists.
     *
     * @param string $name Alias name
     *
     * @return bool True if alias exists
     */
    public function aliasExists($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns an array with all indices that the given alias name points to.
     *
     * @param string $alias Alias name
     *
     * @return array|\Elastica\Index[] List of Elastica\Index
     */
    public function getIndicesWithAlias($alias)
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
        if (is_null($this->_response)) {
            $this->refresh();
        }

        return $this->_response;
    }

    /**
     * Return shards info.
     *
     * @return array Shards info
     */
    public function getShards()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Refresh status object.
     */
    public function refresh()
    {
        $path = '_stats';
        $this->_response = $this->_client->request($path, Request::GET);
        $this->_data = $this->getResponse()->getData();
    }
}
