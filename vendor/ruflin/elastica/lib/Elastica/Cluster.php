<?php

namespace Elastica;

use Elastica\Cluster\Health;
use Elastica\Cluster\Settings;
use Elastica\Exception\NotImplementedException;

/**
 * Cluster informations for elasticsearch.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster.html
 */
class Cluster
{
    /**
     * Client.
     *
     * @var \Elastica\Client Client object
     */
    protected $_client = null;

    /**
     * Cluster state response.
     *
     * @var \Elastica\Response
     */
    protected $_response;

    /**
     * Cluster state data.
     *
     * @var array
     */
    protected $_data;

    /**
     * Creates a cluster object.
     *
     * @param \Elastica\Client $client Connection client object
     */
    public function __construct(Client $client)
    {
        $this->_client = $client;
        $this->refresh();
    }

    /**
     * Refreshes all cluster information (state).
     */
    public function refresh()
    {
        $path = '_cluster/state';
        $this->_response = $this->_client->request($path, Request::GET);
        $this->_data = $this->getResponse()->getData();
    }

    /**
     * Returns the response object.
     *
     * @return \Elastica\Response Response object
     */
    public function getResponse()
    {
        return $this->_response;
    }

    /**
     * Return list of index names.
     *
     * @return array List of index names
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
     * Returns the full state of the cluster.
     *
     * @return array State array
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-state.html
     */
    public function getState()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a list of existing node names.
     *
     * @return array List of node names
     */
    public function getNodeNames()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns all nodes of the cluster.
     *
     * @return \Elastica\Node[]
     */
    public function getNodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the client object.
     *
     * @return \Elastica\Client Client object
     */
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * Returns the cluster information (not implemented yet).
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-nodes-info.html
     *
     * @param array $args Additional arguments
     *
     * @throws \Elastica\Exception\NotImplementedException
     */
    public function getInfo(array $args)
    {
        throw new NotImplementedException('not implemented yet');
    }

    /**
     * Return Cluster health.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-health.html
     *
     * @return \Elastica\Cluster\Health
     */
    public function getHealth()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return Cluster settings.
     *
     * @return \Elastica\Cluster\Settings
     */
    public function getSettings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Shuts down the complete cluster.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-nodes-shutdown.html
     *
     * @param string $delay OPTIONAL Seconds to shutdown cluster after (default = 1s)
     *
     * @return \Elastica\Response
     */
    public function shutdown($delay = '1s')
    {
        $path = '_shutdown?delay='.$delay;

        return $this->_client->request($path, Request::POST);
    }
}