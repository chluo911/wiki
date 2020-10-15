<?php

namespace Elastica;

use Elastica\Exception\InvalidException;
use Elastica\Exception\ResponseException;
use Elastica\Index\Settings as IndexSettings;
use Elastica\Index\Stats as IndexStats;

/**
 * Elastica index object.
 *
 * Handles reads, deletes and configurations of an index
 *
 * @author   Nicolas Ruflin <spam@ruflin.com>
 */
class Index implements SearchableInterface
{
    /**
     * Index name.
     *
     * @var string Index name
     */
    protected $_name = '';

    /**
     * Client object.
     *
     * @var \Elastica\Client Client object
     */
    protected $_client = null;

    /**
     * Creates a new index object.
     *
     * All the communication to and from an index goes of this object
     *
     * @param \Elastica\Client $client Client object
     * @param string           $name   Index name
     *
     * @throws \Elastica\Exception\InvalidException
     */
    public function __construct(Client $client, $name)
    {
        $this->_client = $client;

        if (!is_scalar($name)) {
            throw new InvalidException('Index name should be a scalar type');
        }
        $this->_name = (string) $name;
    }

    /**
     * Returns a type object for the current index with the given name.
     *
     * @param string $type Type name
     *
     * @return \Elastica\Type Type object
     */
    public function getType($type)
    {
        return new Type($this, $type);
    }

    /**
     * Return Index Stats.
     *
     * @return \Elastica\Index\Stats
     */
    public function getStats()
    {
        return new IndexStats($this);
    }

    /**
     * Gets all the type mappings for an index.
     *
     * @return array
     */
    public function getMapping()
    {
        $path = '_mapping';

        $response = $this->request($path, Request::GET);
        $data = $response->getData();

        // Get first entry as if index is an Alias, the name of the mapping is the real name and not alias name
        $mapping = array_shift($data);

        if (isset($mapping['mappings'])) {
            return $mapping['mappings'];
        }

        return array();
    }

    /**
     * Returns the index settings object.
     *
     * @return \Elastica\Index\Settings Settings object
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
     * Uses _bulk to send documents to the server.
     *
     * @param array|\Elastica\Document[] $docs Array of Elastica\Document
     *
     * @return \Elastica\Bulk\ResponseSet
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-bulk.html
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
     * @param array|\Elastica\Document[] $docs Array of Elastica\Document
     *
     * @return \Elastica\Bulk\ResponseSet
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-bulk.html
     */
    public function addDocuments(array $docs)
    {
        foreach ($docs as $doc) {
            $doc->setIndex($this->getName());
        }

        return $this->getClient()->addDocuments($docs);
    }

    /**
     * Deletes entries in the db based on a query.
     *
     * @param \Elastica\Query|string|array $query   Query object or array
     * @param array                        $options Optional params
     *
     * @return \Elastica\Response
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-delete-by-query.html
     */
    public function deleteByQuery($query, array $options = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Deletes the index.
     *
     * @return \Elastica\Response Response object
     */
    public function delete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Uses _bulk to delete documents from the server.
     *
     * @param array|\Elastica\Document[] $docs Array of Elastica\Document
     *
     * @return \Elastica\Bulk\ResponseSet
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-bulk.html
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
     * Optimizes search index.
     *
     * Detailed arguments can be found here in the link
     *
     * @param array $args OPTIONAL Additional arguments
     *
     * @return array Server response
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-optimize.html
     */
    public function optimize($args = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Refreshes the index.
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-refresh.html
     */
    public function refresh()
    {
        return $this->request('_refresh', Request::POST, array());
    }

    /**
     * Creates a new index with the given arguments.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-create-index.html
     *
     * @param array      $args    OPTIONAL Arguments to use
     * @param bool|array $options OPTIONAL
     *                            bool=> Deletes index first if already exists (default = false).
     *                            array => Associative array of options (option=>value)
     *
     * @throws \Elastica\Exception\InvalidException
     * @throws \Elastica\Exception\ResponseException
     *
     * @return array Server response
     */
    public function create(array $args = array(), $options = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if the given index is already created.
     *
     * @return bool True if index exists
     */
    public function exists()
    {
        $response = $this->getClient()->request($this->getName(), Request::HEAD);
        $info = $response->getTransferInfo();

        return (bool) ($info['http_code'] == 200);
    }

    /**
     * @param string|array|\Elastica\Query $query
     * @param int|array                    $options
     *
     * @return \Elastica\Search
     */
    public function createSearch($query = '', $options = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Searches in this index.
     *
     * @param string|array|\Elastica\Query $query   Array with all query data inside or a Elastica\Query object
     * @param int|array                    $options OPTIONAL Limit or associative array of options (option=>value)
     *
     * @return \Elastica\ResultSet with all results inside
     *
     * @see \Elastica\SearchableInterface::search
     */
    public function search($query = '', $options = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Counts results of query.
     *
     * @param string|array|\Elastica\Query $query Array with all query data inside or a Elastica\Query object
     *
     * @return int number of documents matching the query
     *
     * @see \Elastica\SearchableInterface::count
     */
    public function count($query = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Opens an index.
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-open-close.html
     */
    public function open()
    {
        return $this->request('_open', Request::POST);
    }

    /**
     * Closes the index.
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-open-close.html
     */
    public function close()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the index name.
     *
     * @return string Index name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Returns index client.
     *
     * @return \Elastica\Client Index client object
     */
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * Adds an alias to the current index.
     *
     * @param string $name    Alias name
     * @param bool   $replace OPTIONAL If set, an existing alias will be replaced
     *
     * @return \Elastica\Response Response
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-aliases.html
     */
    public function addAlias($name, $replace = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Removes an alias pointing to the current index.
     *
     * @param string $name Alias name
     *
     * @return \Elastica\Response Response
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-aliases.html
     */
    public function removeAlias($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns all index aliases.
     *
     * @return array Aliases
     */
    public function getAliases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if the index has the given alias.
     *
     * @param string $name Alias name
     *
     * @return bool
     */
    public function hasAlias($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clears the cache of an index.
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-clearcache.html
     */
    public function clearCache()
    {
        $path = '_cache/clear';
        // TODO: add additional cache clean arguments
        return $this->request($path, Request::POST);
    }

    /**
     * Flushes the index to storage.
     *
     * @param bool $refresh
     *
     * @return Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-flush.html
     */
    public function flush($refresh = false)
    {
        $path = '_flush';

        return $this->request($path, Request::POST, array(), array('refresh' => $refresh));
    }

    /**
     * Can be used to change settings during runtime. One example is to use it for bulk updating.
     *
     * @param array $data Data array
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-update-settings.html
     */
    public function setSettings(array $data)
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
     * @param string $path   Path to call
     * @param string $method Rest method to use (GET, POST, DELETE, PUT)
     * @param array  $data   OPTIONAL Arguments as array
     * @param array  $query  OPTIONAL Query params
     *
     * @return \Elastica\Response Response object
     */
    public function request($path, $method, $data = array(), array $query = array())
    {
        $path = $this->getName().'/'.$path;

        return $this->getClient()->request($path, $method, $data, $query);
    }

    /**
     * Analyzes a string.
     *
     * Detailed arguments can be found here in the link
     *
     * @param string $text String to be analyzed
     * @param array  $args OPTIONAL Additional arguments
     *
     * @return array Server response
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-analyze.html
     */
    public function analyze($text, $args = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
