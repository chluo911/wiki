<?php

namespace Elastica;

use Elastica\Bulk\Action;
use Elastica\Exception\ConnectionException;
use Elastica\Exception\InvalidException;
use Elastica\Exception\RuntimeException;
use Elastica\Script\AbstractScript;
use Psr\Log\LoggerInterface;

/**
 * Client to connect the the elasticsearch server.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
class Client
{
    /**
     * Config with defaults.
     *
     * log: Set to true, to enable logging, set a string to log to a specific file
     * retryOnConflict: Use in \Elastica\Client::updateDocument
     * bigintConversion: Set to true to enable the JSON bigint to string conversion option (see issue #717)
     *
     * @var array
     */
    protected $_config = array(
        'host' => null,
        'port' => null,
        'path' => null,
        'url' => null,
        'proxy' => null,
        'transport' => null,
        'persistent' => true,
        'timeout' => null,
        'connections' => array(), // host, port, path, timeout, transport, compression, persistent, timeout, config -> (curl, headers, url)
        'roundRobin' => false,
        'log' => false,
        'retryOnConflict' => 0,
        'bigintConversion' => false,
        'username' => null,
        'password' => null,
    );

    /**
     * @var callback
     */
    protected $_callback = null;

    /**
     * @var \Elastica\Request
     */
    protected $_lastRequest;

    /**
     * @var \Elastica\Response
     */
    protected $_lastResponse;

    /**
     * @var LoggerInterface
     */
    protected $_logger = null;
    /**
     * @var Connection\ConnectionPool
     */
    protected $_connectionPool = null;

    /**
     * Creates a new Elastica client.
     *
     * @param array    $config   OPTIONAL Additional config options
     * @param callback $callback OPTIONAL Callback function which can be used to be notified about errors (for example connection down)
     */
    public function __construct(array $config = array(), $callback = null)
    {
        $this->setConfig($config);
        $this->_callback = $callback;
        $this->_initConnections();
    }

    /**
     * Inits the client connections.
     */
    protected function _initConnections()
    {
        $connections = array();

        foreach ($this->getConfig('connections') as $connection) {
            $connections[] = Connection::create($this->_prepareConnectionParams($connection));
        }

        if (isset($this->_config['servers'])) {
            foreach ($this->getConfig('servers') as $server) {
                $connections[] = Connection::create($this->_prepareConnectionParams($server));
            }
        }

        // If no connections set, create default connection
        if (empty($connections)) {
            $connections[] = Connection::create($this->_prepareConnectionParams($this->getConfig()));
        }

        if (!isset($this->_config['connectionStrategy'])) {
            if ($this->getConfig('roundRobin') === true) {
                $this->setConfigValue('connectionStrategy', 'RoundRobin');
            } else {
                $this->setConfigValue('connectionStrategy', 'Simple');
            }
        }

        $strategy = Connection\Strategy\StrategyFactory::create($this->getConfig('connectionStrategy'));

        $this->_connectionPool = new Connection\ConnectionPool($connections, $strategy, $this->_callback);
    }

    /**
     * Creates a Connection params array from a Client or server config array.
     *
     * @param array $config
     *
     * @return array
     */
    protected function _prepareConnectionParams(array $config)
    {
        $params = array();
        $params['config'] = array();
        foreach ($config as $key => $value) {
            if (in_array($key, array('bigintConversion', 'curl', 'headers', 'url'))) {
                $params['config'][$key] = $value;
            } else {
                $params[$key] = $value;
            }
        }

        return $params;
    }

    /**
     * Sets specific config values (updates and keeps default values).
     *
     * @param array $config Params
     *
     * @return $this
     */
    public function setConfig(array $config)
    {
        foreach ($config as $key => $value) {
            $this->_config[$key] = $value;
        }

        return $this;
    }

    /**
     * Returns a specific config key or the whole
     * config array if not set.
     *
     * @param string $key Config key
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return array|string Config value
     */
    public function getConfig($key = '')
    {
        if (empty($key)) {
            return $this->_config;
        }

        if (!array_key_exists($key, $this->_config)) {
            throw new InvalidException('Config key is not set: '.$key);
        }

        return $this->_config[$key];
    }

    /**
     * Sets / overwrites a specific config value.
     *
     * @param string $key   Key to set
     * @param mixed  $value Value
     *
     * @return $this
     */
    public function setConfigValue($key, $value)
    {
        return $this->setConfig(array($key => $value));
    }

    /**
     * @param array|string $keys    config key or path of config keys
     * @param mixed        $default default value will be returned if key was not found
     *
     * @return mixed
     */
    public function getConfigValue($keys, $default = null)
    {
        $value = $this->_config;
        foreach ((array) $keys as $key) {
            if (isset($value[$key])) {
                $value = $value[$key];
            } else {
                return $default;
            }
        }

        return $value;
    }

    /**
     * Returns the index for the given connection.
     *
     * @param string $name Index name to create connection to
     *
     * @return \Elastica\Index Index for the given name
     */
    public function getIndex($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a HTTP Header.
     *
     * @param string $header      The HTTP Header
     * @param string $headerValue The HTTP Header Value
     *
     * @throws \Elastica\Exception\InvalidException If $header or $headerValue is not a string
     *
     * @return $this
     */
    public function addHeader($header, $headerValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Remove a HTTP Header.
     *
     * @param string $header The HTTP Header to remove
     *
     * @throws \Elastica\Exception\InvalidException If $header is not a string
     *
     * @return $this
     */
    public function removeHeader($header)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Uses _bulk to send documents to the server.
     *
     * Array of \Elastica\Document as input. Index and type has to be
     * set inside the document, because for bulk settings documents,
     * documents can belong to any type and index
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-bulk.html
     *
     * @param array|\Elastica\Document[] $docs Array of Elastica\Document
     *
     * @throws \Elastica\Exception\InvalidException If docs is empty
     *
     * @return \Elastica\Bulk\ResponseSet Response object
     */
    public function updateDocuments(array $docs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Uses _bulk to send documents to the server.
     *
     * Array of \Elastica\Document as input. Index and type has to be
     * set inside the document, because for bulk settings documents,
     * documents can belong to any type and index
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-bulk.html
     *
     * @param array|\Elastica\Document[] $docs Array of Elastica\Document
     *
     * @throws \Elastica\Exception\InvalidException If docs is empty
     *
     * @return \Elastica\Bulk\ResponseSet Response object
     */
    public function addDocuments(array $docs)
    {
        if (empty($docs)) {
            throw new InvalidException('Array has to consist of at least one element');
        }

        $bulk = new Bulk($this);

        $bulk->addDocuments($docs);

        return $bulk->send();
    }

    /**
     * Update document, using update script. Requires elasticsearch >= 0.19.0.
     *
     * @param int                                                      $id      document id
     * @param array|\Elastica\Script\AbstractScript|\Elastica\Document $data    raw data for request body
     * @param string                                                   $index   index to update
     * @param string                                                   $type    type of index to update
     * @param array                                                    $options array of query params to use for query. For possible options check es api
     *
     * @return \Elastica\Response
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-update.html
     */
    public function updateDocument($id, $data, $index, $type, array $options = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \Elastica\Response $response
     * @param \Elastica\Document $document
     * @param string             $fields   Array of field names to be populated or '_source' if whole document data should be updated
     */
    protected function _populateDocumentFieldsFromResponse(Response $response, Document $document, $fields)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Bulk deletes documents.
     *
     * @param array|\Elastica\Document[] $docs
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return \Elastica\Bulk\ResponseSet
     */
    public function deleteDocuments(array $docs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the status object for all indices.
     *
     * @return \Elastica\Status Status object
     */
    public function getStatus()
    {
        return new Status($this);
    }

    /**
     * Returns the current cluster.
     *
     * @return \Elastica\Cluster Cluster object
     */
    public function getCluster()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
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
     * Determines whether a valid connection is available for use.
     *
     * @return bool
     */
    public function hasConnection()
    {
        return $this->_connectionPool->hasConnection();
    }

    /**
     * @throws \Elastica\Exception\ClientException
     *
     * @return \Elastica\Connection
     */
    public function getConnection()
    {
        return $this->_connectionPool->getConnection();
    }

    /**
     * @return \Elastica\Connection[]
     */
    public function getConnections()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return \Elastica\Connection\Strategy\StrategyInterface
     */
    public function getConnectionStrategy()
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
     * Deletes documents with the given ids, index, type from the index.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-bulk.html
     *
     * @param array                  $ids     Document ids
     * @param string|\Elastica\Index $index   Index name
     * @param string|\Elastica\Type  $type    Type of documents
     * @param string|bool            $routing Optional routing key for all ids
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return \Elastica\Bulk\ResponseSet Response  object
     */
    public function deleteIds(array $ids, $index, $type, $routing = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Bulk operation.
     *
     * Every entry in the params array has to exactly on array
     * of the bulk operation. An example param array would be:
     *
     * array(
     *         array('index' => array('_index' => 'test', '_type' => 'user', '_id' => '1')),
     *         array('user' => array('name' => 'hans')),
     *         array('delete' => array('_index' => 'test', '_type' => 'user', '_id' => '2'))
     * );
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-bulk.html
     *
     * @param array $params Parameter array
     *
     * @throws \Elastica\Exception\ResponseException
     * @throws \Elastica\Exception\InvalidException
     *
     * @return \Elastica\Bulk\ResponseSet Response object
     */
    public function bulk(array $params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Makes calls to the elasticsearch server based on this index.
     *
     * It's possible to make any REST query directly over this method
     *
     * @param string $path   Path to call
     * @param string $method Rest method to use (GET, POST, DELETE, PUT)
     * @param array  $data   OPTIONAL Arguments as array
     * @param array  $query  OPTIONAL Query params
     *
     * @throws Exception\ConnectionException|\Exception
     *
     * @return \Elastica\Response Response object
     */
    public function request($path, $method = Request::GET, $data = array(), array $query = array())
    {
        $connection = $this->getConnection();
        try {
            $request = new Request($path, $method, $data, $query, $connection);

            $this->_log($request);

            $response = $request->send();

            $this->_lastRequest = $request;
            $this->_lastResponse = $response;

            return $response;
        } catch (ConnectionException $e) {
            $this->_connectionPool->onFail($connection, $e, $this);

            // In case there is no valid connection left, throw exception which caused the disabling of the connection.
            if (!$this->hasConnection()) {
                throw $e;
            }

            return $this->request($path, $method, $data, $query);
        }
    }

    /**
     * Optimizes all search indices.
     *
     * @param array $args OPTIONAL Optional arguments
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-optimize.html
     */
    public function optimizeAll($args = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Refreshes all search indices.
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-refresh.html
     */
    public function refreshAll()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * logging.
     *
     * @param string|\Elastica\Request $context
     *
     * @throws Exception\RuntimeException
     */
    protected function _log($context)
    {
        $log = $this->getConfig('log');
        if ($log && !class_exists('Psr\Log\AbstractLogger')) {
            throw new RuntimeException('Class Psr\Log\AbstractLogger not found');
        } elseif (!$this->_logger && $log) {
            $this->setLogger(new Log($this->getConfig('log')));
        }
        if ($this->_logger) {
            if ($context instanceof Request) {
                $data = $context->toArray();
            } else {
                $data = array('message' => $context);
            }
            $this->_logger->debug('logging Request', $data);
        }
    }

    /**
     * @return \Elastica\Request
     */
    public function getLastRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return \Elastica\Response
     */
    public function getLastResponse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * set Logger.
     *
     * @param LoggerInterface $logger
     *
     * @return $this
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->_logger = $logger;

        return $this;
    }
}
