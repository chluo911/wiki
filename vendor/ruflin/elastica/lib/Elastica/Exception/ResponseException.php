<?php

namespace Elastica\Exception;

use Elastica\Request;
use Elastica\Response;

/**
 * Response exception.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 */
class ResponseException extends \RuntimeException implements ExceptionInterface
{
    /**
     * @var \Elastica\Request Request object
     */
    protected $_request = null;

    /**
     * @var \Elastica\Response Response object
     */
    protected $_response = null;

    /**
     * Construct Exception.
     *
     * @param \Elastica\Request  $request
     * @param \Elastica\Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->_request = $request;
        $this->_response = $response;
        parent::__construct($response->getErrorMessage());
    }

    /**
     * Returns request object.
     *
     * @return \Elastica\Request Request object
     */
    public function getRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns response object.
     *
     * @return \Elastica\Response Response object
     */
    public function getResponse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns elasticsearch exception.
     *
     * @return ElasticsearchException
     */
    public function getElasticsearchException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
