<?php

namespace Elastica;

/**
 * Scroll Iterator.
 *
 * @author Manuel Andreo Garcia <andreo.garcia@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/search-request-scroll.html
 */
class Scroll implements \Iterator
{
    /**
     * @var string
     */
    public $expiryTime;

    /**
     * @var Search
     */
    protected $_search;

    /**
     * @var null|string
     */
    protected $_nextScrollId = null;

    /**
     * @var null|ResultSet
     */
    protected $_currentResultSet = null;

    /**
     * 0: scroll<br>
     * 1: scroll id<br>
     * 2: search type.
     *
     * @var array
     */
    protected $_options = array(null, null, null);

    /**
     * Constructor.
     *
     * @param Search $search
     * @param string $expiryTime
     */
    public function __construct(Search $search, $expiryTime = '1m')
    {
        $this->_search = $search;
        $this->expiryTime = $expiryTime;
    }

    /**
     * Returns current result set.
     *
     * @link http://php.net/manual/en/iterator.current.php
     *
     * @return ResultSet
     */
    public function current()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Next scroll search.
     *
     * @link http://php.net/manual/en/iterator.next.php
     */
    public function next()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns scroll id.
     *
     * @link http://php.net/manual/en/iterator.key.php
     *
     * @return string
     */
    public function key()
    {
        return $this->_nextScrollId;
    }

    /**
     * Returns true if current result set contains at least one hit.
     *
     * @link http://php.net/manual/en/iterator.valid.php
     *
     * @return bool
     */
    public function valid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Initial scroll search.
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     */
    public function rewind()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepares Scroll for next request.
     *
     * @param ResultSet $resultSet
     */
    protected function _setScrollId(ResultSet $resultSet)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Save all search options manipulated by Scroll.
     */
    protected function _saveOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Revert search options to previously saved state.
     */
    protected function _revertOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
