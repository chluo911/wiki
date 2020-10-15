<?php

namespace Elastica;

/**
 * Scan and Scroll Iterator.
 *
 * @author Manuel Andreo Garcia <andreo.garcia@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/guide/current/scan-scroll.html
 */
class ScanAndScroll extends Scroll
{
    /**
     * @var int
     */
    public $sizePerShard;

    /**
     * Constructor.
     *
     * @param Search $search
     * @param string $expiryTime
     * @param int    $sizePerShard
     */
    public function __construct(Search $search, $expiryTime = '1m', $sizePerShard = 1000)
    {
        $this->sizePerShard = $sizePerShard;

        parent::__construct($search, $expiryTime);
    }

    /**
     * Initial scan search.
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
