<?php

namespace Elastica\Node;

use Elastica\Node as BaseNode;
use Elastica\Request;

/**
 * Elastica cluster node object.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-status.html
 */
class Info
{
    /**
     * Response.
     *
     * @var \Elastica\Response Response object
     */
    protected $_response = null;

    /**
     * Stats data.
     *
     * @var array stats data
     */
    protected $_data = array();

    /**
     * Node.
     *
     * @var \Elastica\Node Node object
     */
    protected $_node = null;

    /**
     * Query parameters.
     *
     * @var array
     */
    protected $_params = array();

    /**
     * Create new info object for node.
     *
     * @param \Elastica\Node $node   Node object
     * @param array          $params List of params to return. Can be: settings, os, process, jvm, thread_pool, network, transport, http
     */
    public function __construct(BaseNode $node, array $params = array())
    {
        $this->_node = $node;
        $this->refresh($params);
    }

    /**
     * Returns the entry in the data array based on the params.
     * Several params possible.
     *
     * Example 1: get('os', 'mem', 'total') returns total memory of the system the
     * node is running on
     * Example 2: get('os', 'mem') returns an array with all mem infos
     *
     * @return mixed Data array entry or null if not found
     */
    public function get()
    {
        $data = $this->getData();

        foreach (func_get_args() as $arg) {
            if (isset($data[$arg])) {
                $data = $data[$arg];
            } else {
                return;
            }
        }

        return $data;
    }

    /**
     * Return port of the node.
     *
     * @return string Returns Node port
     */
    public function getPort()
    {
        // Returns string in format: inet[/192.168.1.115:9201]
        $data = $this->get('http_address');
        $data = substr($data, 6, strlen($data) - 7);
        $data = explode(':', $data);

        return $data[1];
    }

    /**
     * Return IP of the node.
     *
     * @return string Returns Node ip address
     */
    public function getIp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return data regarding plugins installed on this node.
     *
     * @return array plugin data
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/cluster-nodes-info.html
     */
    public function getPlugins()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if the given plugin is installed on this node.
     *
     * @param string $name plugin name
     *
     * @return bool true if the plugin is installed, false otherwise
     */
    public function hasPlugin($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return all info data.
     *
     * @return array Data array
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Return node object.
     *
     * @return \Elastica\Node Node object
     */
    public function getNode()
    {
        return $this->_node;
    }

    /**
     * @return string Unique node id
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string Node name
     */
    public function getName()
    {
        return $this->_data['name'];
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
     * Reloads all nodes information. Has to be called if informations changed.
     *
     * @param array $params Params to return (default none). Possible options: settings, os, process, jvm, thread_pool, network, transport, http, plugin
     *
     * @return \Elastica\Response Response object
     */
    public function refresh(array $params = array())
    {
        $this->_params = $params;

        $path = '_nodes/'.$this->getNode()->getId();

        if (!empty($params)) {
            $path .= '?';
            foreach ($params as $param) {
                $path .= $param.'=true&';
            }
        }

        $this->_response = $this->getNode()->getClient()->request($path, Request::GET);
        $data = $this->getResponse()->getData();

        $this->_data = reset($data['nodes']);
        $this->_id = key($data['nodes']);
        $this->getNode()->setId($this->getId());
    }
}