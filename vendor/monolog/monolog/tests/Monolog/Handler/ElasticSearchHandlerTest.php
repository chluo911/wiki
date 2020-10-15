<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Formatter\ElasticaFormatter;
use Monolog\Formatter\NormalizerFormatter;
use Monolog\TestCase;
use Monolog\Logger;
use Elastica\Client;
use Elastica\Request;
use Elastica\Response;

class ElasticSearchHandlerTest extends TestCase
{
    /**
     * @var Client mock
     */
    protected $client;

    /**
     * @var array Default handler options
     */
    protected $options = array(
        'index' => 'my_index',
        'type'  => 'doc_type',
    );

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\ElasticSearchHandler::write
     * @covers Monolog\Handler\ElasticSearchHandler::handleBatch
     * @covers Monolog\Handler\ElasticSearchHandler::bulkSend
     * @covers Monolog\Handler\ElasticSearchHandler::getDefaultFormatter
     */
    public function testHandle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\ElasticSearchHandler::setFormatter
     */
    public function testSetFormatter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers                   Monolog\Handler\ElasticSearchHandler::setFormatter
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage ElasticSearchHandler is only compatible with ElasticaFormatter
     */
    public function testSetFormatterInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\ElasticSearchHandler::__construct
     * @covers Monolog\Handler\ElasticSearchHandler::getOptions
     */
    public function testOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       Monolog\Handler\ElasticSearchHandler::bulkSend
     * @dataProvider providerTestConnectionErrors
     */
    public function testConnectionErrors($ignore, $expectedError)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    public function providerTestConnectionErrors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Integration test using localhost Elastic Search server
     *
     * @covers Monolog\Handler\ElasticSearchHandler::__construct
     * @covers Monolog\Handler\ElasticSearchHandler::handleBatch
     * @covers Monolog\Handler\ElasticSearchHandler::bulkSend
     * @covers Monolog\Handler\ElasticSearchHandler::getDefaultFormatter
     */
    public function testHandleIntegration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return last created document id from ES response
     * @param  Response    $response Elastica Response object
     * @return string|null
     */
    protected function getCreatedDocId(Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Retrieve document by id from Elasticsearch
     * @param  Client $client     Elastica client
     * @param  string $index
     * @param  string $type
     * @param  string $documentId
     * @return array
     */
    protected function getDocSourceFromElastic(Client $client, $index, $type, $documentId)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
