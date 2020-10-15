<?php

namespace Elastica\Exception;

/**
 * Elasticsearch exception.
 *
 * @author Ian Babrou <ibobrik@gmail.com>
 */
class ElasticsearchException extends \Exception implements ExceptionInterface
{
    const REMOTE_TRANSPORT_EXCEPTION = 'RemoteTransportException';

    /**
     * @var string|null Elasticsearch exception name
     */
    private $_exception;

    /**
     * @var bool Whether exception was local to server node or remote
     */
    private $_isRemote = false;

    /**
     * @var array Error array
     */
    protected $_error = array();

    /**
     * Constructs elasticsearch exception.
     *
     * @param int   $code  Error code
     * @param array $error Error object from elasticsearch
     */
    public function __construct($code, $error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse error message from elasticsearch.
     *
     * @param string $error Error message
     */
    protected function _parseError($error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extract exception name from error response.
     *
     * @param string $error
     *
     * @return null|string
     */
    protected function _extractException($error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns elasticsearch exception name.
     *
     * @return string|null
     */
    public function getExceptionName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether exception was local to server node or remote.
     *
     * @return bool
     */
    public function isRemoteTransportException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array Error array
     */
    public function getError()
    {
        return $this->_error;
    }
}
