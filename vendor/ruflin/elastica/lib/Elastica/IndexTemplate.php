<?php

namespace Elastica;

use Elastica\Exception\InvalidException;

/**
 * Elastica index template object.
 *
 * @author Dmitry Balabka <dmitry.balabka@gmail.com>
 * 
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-templates.html
 */
class IndexTemplate
{
    /**
     * Index template name.
     *
     * @var string Index pattern
     */
    protected $_name = '';

    /**
     * Client object.
     *
     * @var \Elastica\Client Client object
     */
    protected $_client = null;

    /**
     * Creates a new index template object.
     *
     * @param \Elastica\Client $client Client object
     * @param string           $name   Index template name
     *
     * @throws \Elastica\Exception\InvalidException
     */
    public function __construct(Client $client, $name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Deletes the index template.
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
     * Creates a new index template with the given arguments.
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-templates.html
     *
     * @param array $args OPTIONAL Arguments to use
     *
     * @return \Elastica\Response
     */
    public function create(array $args = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if the given index template is already created.
     *
     * @return bool True if index exists
     */
    public function exists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the index template name.
     *
     * @return string Index name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Returns index template client.
     *
     * @return \Elastica\Client Index client object
     */
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * Makes calls to the elasticsearch server based on this index template name.
     *
     * @param string $method Rest method to use (GET, POST, DELETE, PUT)
     * @param array  $data   OPTIONAL Arguments as array
     *
     * @return \Elastica\Response Response object
     */
    public function request($method, $data = array())
    {
        $path = '/_template/'.$this->getName();

        return $this->getClient()->request($path, $method, $data);
    }
}
