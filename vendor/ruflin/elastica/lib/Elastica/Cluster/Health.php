<?php

namespace Elastica\Cluster;

use Elastica\Client;
use Elastica\Cluster\Health\Index;
use Elastica\Request;

/**
 * Elastic cluster health.
 *
 * @author Ray Ward <ray.ward@bigcommerce.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-health.html
 */
class Health
{
    /**
     * @var \Elastica\Client Client object.
     */
    protected $_client = null;

    /**
     * @var array The cluster health data.
     */
    protected $_data = null;

    /**
     * @param \Elastica\Client $client The Elastica client.
     */
    public function __construct(Client $client)
    {
        $this->_client = $client;
        $this->refresh();
    }

    /**
     * Retrieves the health data from the cluster.
     *
     * @return array
     */
    protected function _retrieveHealthData()
    {
        $path = '_cluster/health?level=shards';
        $response = $this->_client->request($path, Request::GET);

        return $response->getData();
    }

    /**
     * Gets the health data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Refreshes the health data for the cluster.
     *
     * @return $this
     */
    public function refresh()
    {
        $this->_data = $this->_retrieveHealthData();

        return $this;
    }

    /**
     * Gets the name of the cluster.
     *
     * @return string
     */
    public function getClusterName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the status of the cluster.
     *
     * @return string green, yellow or red.
     */
    public function getStatus()
    {
        return $this->_data['status'];
    }

    /**
     * TODO determine the purpose of this.
     *
     * @return bool
     */
    public function getTimedOut()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of nodes in the cluster.
     *
     * @return int
     */
    public function getNumberOfNodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of data nodes in the cluster.
     *
     * @return int
     */
    public function getNumberOfDataNodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of active primary shards.
     *
     * @return int
     */
    public function getActivePrimaryShards()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of active shards.
     *
     * @return int
     */
    public function getActiveShards()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of relocating shards.
     *
     * @return int
     */
    public function getRelocatingShards()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of initializing shards.
     *
     * @return int
     */
    public function getInitializingShards()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of unassigned shards.
     *
     * @return int
     */
    public function getUnassignedShards()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the status of the indices.
     *
     * @return \Elastica\Cluster\Health\Index[]
     */
    public function getIndices()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
