<?php

namespace Elastica\Type;

use Elastica\Client;
use Elastica\Exception\InvalidException;
use Elastica\Index;
use Elastica\SearchableInterface;
use Elastica\Type as BaseType;
use Elastica\Util;

/**
 * Abstract helper class to implement search indices based on models.
 *
 * This abstract model should help creating search index and a subtype
 * with some easy config entries that are overloaded.
 *
 * The following variables have to be set:
 *    - $_indexName
 *    - $_typeName
 *
 * The following variables can be set for additional configuration
 *    - $_mapping: Value type mapping for the given type
 *    - $_indexParams: Parameters for the index
 *
 * @todo Add some settings examples to code
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
abstract class AbstractType implements SearchableInterface
{
    const MAX_DOCS_PER_REQUEST = 1000;

    /**
     * Index name.
     *
     * @var string Index name
     */
    protected $_indexName = '';

    /**
     * Index name.
     *
     * @var string Index name
     */
    protected $_typeName = '';

    /**
     * Client.
     *
     * @var \Elastica\Client Client object
     */
    protected $_client = null;

    /**
     * Index.
     *
     * @var \Elastica\Index Index object
     */
    protected $_index = null;

    /**
     * Type.
     *
     * @var \Elastica\Type Type object
     */
    protected $_type = null;

    /**
     * Mapping.
     *
     * @var array Mapping
     */
    protected $_mapping = array();

    /**
     * Index params.
     *
     * @var array Index  params
     */
    protected $_indexParams = array();

    /**
     * Source.
     *
     * @var bool Source
     */
    protected $_source = true;

    /**
     * Creates index object with client connection.
     *
     * Reads index and type name from protected vars _indexName and _typeName.
     * Has to be set in child class
     *
     * @param \Elastica\Client $client OPTIONAL Client object
     *
     * @throws \Elastica\Exception\InvalidException
     */
    public function __construct(Client $client = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates the index and sets the mapping for this type.
     *
     * @param bool $recreate OPTIONAL Recreates the index if true (default = false)
     */
    public function create($recreate = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string|\Elastica\Query $query
     * @param array|int              $options
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
     * Search on the type.
     *
     * @param string|array|\Elastica\Query $query   Array with all query data inside or a Elastica\Query object
     * @param null                         $options
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
     * Count docs in the type based on query.
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
     * Returns the search index.
     *
     * @return \Elastica\Index Index object
     */
    public function getIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns type object.
     *
     * @return \Elastica\Type Type object
     */
    public function getType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts given time to format: 1995-12-31T23:59:59Z.
     *
     * This is the lucene date format
     *
     * @param int $date Date input (could be string etc.) -> must be supported by strtotime
     *
     * @return string Converted date string
     */
    public function convertDate($date)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
