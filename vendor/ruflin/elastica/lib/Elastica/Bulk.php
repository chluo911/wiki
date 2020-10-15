<?php

namespace Elastica;

use Elastica\Bulk\Action;
use Elastica\Bulk\Action\AbstractDocument as AbstractDocumentAction;
use Elastica\Bulk\Response as BulkResponse;
use Elastica\Bulk\ResponseSet;
use Elastica\Exception\Bulk\ResponseException as BulkResponseException;
use Elastica\Exception\InvalidException;
use Elastica\Script\AbstractScript;

class Bulk
{
    const DELIMITER = "\n";

    /**
     * @var \Elastica\Client
     */
    protected $_client;

    /**
     * @var \Elastica\Bulk\Action[]
     */
    protected $_actions = array();

    /**
     * @var string
     */
    protected $_index = '';

    /**
     * @var string
     */
    protected $_type = '';

    /**
     * @var array request parameters to the bulk api
     */
    protected $_requestParams = array();

    /**
     * @param \Elastica\Client $client
     */
    public function __construct(Client $client)
    {
        $this->_client = $client;
    }

    /**
     * @param string|\Elastica\Index $index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        if ($index instanceof Index) {
            $index = $index->getName();
        }

        $this->_index = (string) $index;

        return $this;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->_index;
    }

    /**
     * @return bool
     */
    public function hasIndex()
    {
        return '' !== $this->getIndex();
    }

    /**
     * @param string|\Elastica\Type $type
     *
     * @return $this
     */
    public function setType($type)
    {
        if ($type instanceof Type) {
            $this->setIndex($type->getIndex()->getName());
            $type = $type->getName();
        }

        $this->_type = (string) $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @return bool
     */
    public function hasType()
    {
        return '' !== $this->_type;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        $path = '';
        if ($this->hasIndex()) {
            $path .= $this->getIndex().'/';
            if ($this->hasType()) {
                $path .= $this->getType().'/';
            }
        }
        $path .= '_bulk';

        return $path;
    }

    /**
     * @param \Elastica\Bulk\Action $action
     *
     * @return $this
     */
    public function addAction(Action $action)
    {
        $this->_actions[] = $action;

        return $this;
    }

    /**
     * @param \Elastica\Bulk\Action[] $actions
     *
     * @return $this
     */
    public function addActions(array $actions)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return \Elastica\Bulk\Action[]
     */
    public function getActions()
    {
        return $this->_actions;
    }

    /**
     * @param \Elastica\Document $document
     * @param string             $opType
     *
     * @return $this
     */
    public function addDocument(Document $document, $opType = null)
    {
        $action = AbstractDocumentAction::create($document, $opType);

        return $this->addAction($action);
    }

    /**
     * @param \Elastica\Document[] $documents
     * @param string               $opType
     *
     * @return $this
     */
    public function addDocuments(array $documents, $opType = null)
    {
        foreach ($documents as $document) {
            $this->addDocument($document, $opType);
        }

        return $this;
    }

    /**
     * @param \Elastica\Script\AbstractScript $script
     * @param string                          $opType
     *
     * @return $this
     */
    public function addScript(AbstractScript $script, $opType = null)
    {
        $action = AbstractDocumentAction::create($script, $opType);

        return $this->addAction($action);
    }

    /**
     * @param \Elastica\Document[] $scripts
     * @param string               $opType
     *
     * @return $this
     */
    public function addScripts(array $scripts, $opType = null)
    {
        foreach ($scripts as $document) {
            $this->addScript($document, $opType);
        }

        return $this;
    }

    /**
     * @param \Elastica\Script\AbstractScript|\Elastica\Document|array $data
     * @param string                                                   $opType
     *
     * @return $this
     */
    public function addData($data, $opType = null)
    {
        if (!is_array($data)) {
            $data = array($data);
        }

        foreach ($data as $actionData) {
            if ($actionData instanceof AbstractScript) {
                $this->addScript($actionData, $opType);
            } elseif ($actionData instanceof Document) {
                $this->addDocument($actionData, $opType);
            } else {
                throw new \InvalidArgumentException('Data should be a Document, a Script or an array containing Documents and/or Scripts');
            }
        }

        return $this;
    }

    /**
     * @param array $data
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return $this
     */
    public function addRawData(array $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set a url parameter on the request bulk request.
     *
     * @param string $name  name of the parameter
     * @param string $value value of the parameter
     *
     * @return $this
     */
    public function setRequestParam($name, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the amount of time that the request will wait the shards to come on line.
     * Requires Elasticsearch version >= 0.90.8.
     *
     * @param string $time timeout in Elasticsearch time format
     *
     * @return $this
     */
    public function setShardTimeout($time)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @return string
     */
    public function toString()
    {
        $data = '';
        foreach ($this->getActions() as $action) {
            $data .= $action->toString();
        }

        return $data;
    }

    /**
     * @return array
     */
    public function toArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return \Elastica\Bulk\ResponseSet
     */
    public function send()
    {
        $path = $this->getPath();
        $data = $this->toString();

        $response = $this->_client->request($path, Request::POST, $data, $this->_requestParams);

        return $this->_processResponse($response);
    }

    /**
     * @param \Elastica\Response $response
     *
     * @throws \Elastica\Exception\Bulk\ResponseException
     * @throws \Elastica\Exception\InvalidException
     *
     * @return \Elastica\Bulk\ResponseSet
     */
    protected function _processResponse(Response $response)
    {
        $responseData = $response->getData();

        $actions = $this->getActions();

        $bulkResponses = array();

        if (isset($responseData['items']) && is_array($responseData['items'])) {
            foreach ($responseData['items'] as $key => $item) {
                if (!isset($actions[$key])) {
                    throw new InvalidException('No response found for action #'.$key);
                }

                $action = $actions[$key];

                $opType = key($item);
                $bulkResponseData = reset($item);

                if ($action instanceof AbstractDocumentAction) {
                    $data = $action->getData();
                    if ($data instanceof Document && $data->isAutoPopulate()
                        || $this->_client->getConfigValue(array('document', 'autoPopulate'), false)
                    ) {
                        if (!$data->hasId() && isset($bulkResponseData['_id'])) {
                            $data->setId($bulkResponseData['_id']);
                        }
                        if (isset($bulkResponseData['_version'])) {
                            $data->setVersion($bulkResponseData['_version']);
                        }
                    }
                }

                $bulkResponses[] = new BulkResponse($bulkResponseData, $action, $opType);
            }
        }

        $bulkResponseSet = new ResponseSet($response, $bulkResponses);

        if ($bulkResponseSet->hasError()) {
            throw new BulkResponseException($bulkResponseSet);
        }

        return $bulkResponseSet;
    }
}
