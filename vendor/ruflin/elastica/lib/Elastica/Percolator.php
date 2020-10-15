<?php

namespace Elastica;

/**
 * Percolator class.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-percolate.html
 */
class Percolator
{
    const EXTRA_FILTER = 'filter';
    const EXTRA_QUERY = 'query';
    const EXTRA_SIZE = 'size';
    const EXTRA_TRACK_SCORES = 'track_scores';
    const EXTRA_SORT = 'sort';
    const EXTRA_AGGS = 'aggs';
    const EXTRA_HIGHLIGHT = 'highlight';

    private $_extraRequestBodyOptions = array(
        self::EXTRA_FILTER,
        self::EXTRA_QUERY,
        self::EXTRA_SIZE,
        self::EXTRA_TRACK_SCORES,
        self::EXTRA_SORT,
        self::EXTRA_AGGS,
        self::EXTRA_HIGHLIGHT,
    );

    /**
     * Index object.
     *
     * @var \Elastica\Index
     */
    protected $_index = null;

    /**
     * Construct new percolator.
     *
     * @param \Elastica\Index $index
     */
    public function __construct(Index $index)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Registers a percolator query, with optional extra fields to include in the registered query.
     *
     * @param string                                               $name   Query name
     * @param string|\Elastica\Query|\Elastica\Query\AbstractQuery $query  Query to add
     * @param array                                                $fields Extra fields to include in the registered query
     *                                                                     and can be used to filter executed queries.
     *
     * @return \Elastica\Response
     */
    public function registerQuery($name, $query, $fields = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Removes a percolator query.
     *
     * @param string $name query name
     *
     * @return \Elastica\Response
     */
    public function unregisterQuery($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Match a document to percolator queries.
     *
     * @param \Elastica\Document                                   $doc
     * @param string|\Elastica\Query|\Elastica\Query\AbstractQuery $query  Query to filter the percolator queries which
     *                                                                     are executed.
     * @param string                                               $type
     * @param array                                                $params Supports setting additional request body options to the percolate request.
     *                                                                     [ Percolator::EXTRA_FILTER,
     *                                                                     Percolator::EXTRA_QUERY,
     *                                                                     Percolator::EXTRA_SIZE,
     *                                                                     Percolator::EXTRA_TRACK_SCORES,
     *                                                                     Percolator::EXTRA_SORT,
     *                                                                     Percolator::EXTRA_AGGS,
     *                                                                     Percolator::EXTRA_HIGHLIGHT ]
     *
     * @return array With matching registered queries.
     */
    public function matchDoc(Document $doc, $query = null, $type = 'type', $params = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Percolating an existing document.
     *
     * @param string                                               $id
     * @param string                                               $type
     * @param string|\Elastica\Query|\Elastica\Query\AbstractQuery $query  Query to filter the percolator queries which
     *                                                                     are executed.
     * @param array                                                $params Supports setting additional request body options to the percolate request.
     *                                                                     [ Percolator::EXTRA_FILTER,
     *                                                                     Percolator::EXTRA_QUERY,
     *                                                                     Percolator::EXTRA_SIZE,
     *                                                                     Percolator::EXTRA_TRACK_SCORES,
     *                                                                     Percolator::EXTRA_SORT,
     *                                                                     Percolator::EXTRA_AGGS,
     *                                                                     Percolator::EXTRA_HIGHLIGHT ]
     *
     * @return array With matching registered queries.
     */
    public function matchExistingDoc($id, $type, $query = null, $params = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Process the provided parameters and apply them to the data array.
     *
     * @param &$params
     * @param &$data
     */
    protected function _applyAdditionalRequestBodyOptions(&$params, &$data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string                                               $path
     * @param string|\Elastica\Query|\Elastica\Query\AbstractQuery $query] $query  [description]
     * @param array                                                $data
     * @param array                                                $params
     *
     * @return array
     */
    protected function _percolate($path, $query, $data = array(), $params = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return index object.
     *
     * @return \Elastica\Index
     */
    public function getIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
