<?php

namespace Elastica\Connection;

use Elastica\Client;
use Elastica\Connection;
use Elastica\Connection\Strategy\StrategyInterface;
use Exception;

/**
 * Description of ConnectionPool.
 *
 * @author chabior
 */
class ConnectionPool
{
    /**
     * @var array|\Elastica\Connection[] Connections array
     */
    protected $_connections;

    /**
     * @var \Elastica\Connection\Strategy\StrategyInterface Strategy for connection
     */
    protected $_strategy;

    /**
     * @var callback Function called on connection fail
     */
    protected $_callback;

    /**
     * @param array                                           $connections
     * @param \Elastica\Connection\Strategy\StrategyInterface $strategy
     * @param callback                                        $callback
     */
    public function __construct(array $connections, StrategyInterface $strategy, $callback = null)
    {
        $this->_connections = $connections;

        $this->_strategy = $strategy;

        $this->_callback = $callback;
    }

    /**
     * @param \Elastica\Connection $connection
     *
     * @return $this
     */
    public function addConnection(Connection $connection)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array|\Elastica\Connection[] $connections
     *
     * @return $this
     */
    public function setConnections(array $connections)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function hasConnection()
    {
        foreach ($this->_connections as $connection) {
            if ($connection->isEnabled()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array
     */
    public function getConnections()
    {
        return $this->_connections;
    }

    /**
     * @throws \Elastica\Exception\ClientException
     *
     * @return \Elastica\Connection
     */
    public function getConnection()
    {
        return $this->_strategy->getConnection($this->getConnections());
    }

    /**
     * @param \Elastica\Connection $connection
     * @param \Exception           $e
     * @param Client               $client
     */
    public function onFail(Connection $connection, Exception $e, Client $client)
    {
        $connection->setEnabled(false);

        if ($this->_callback) {
            call_user_func($this->_callback, $connection, $e, $client);
        }
    }

    /**
     * @return \Elastica\Connection\Strategy\StrategyInterface
     */
    public function getStrategy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
