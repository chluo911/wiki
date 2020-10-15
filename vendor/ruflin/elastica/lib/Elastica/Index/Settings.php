<?php

namespace Elastica\Index;

use Elastica\Exception\NotFoundException;
use Elastica\Exception\ResponseException;
use Elastica\Index as BaseIndex;
use Elastica\Request;

/**
 * Elastica index settings object.
 *
 * All settings listed in the update settings API (https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-update-settings.html)
 * can be changed on a running indices. To make changes like the merge policy (https://www.elastic.co/guide/en/elasticsearch/reference/current/index-modules-merge.html)
 * the index has to be closed first and reopened after the call
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-update-settings.html
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/index-modules-merge.html
 */
class Settings
{
    /**
     * Response.
     *
     * @var \Elastica\Response Response object
     */
    protected $_response = null;

    /**
     * Stats info.
     *
     * @var array Stats info
     */
    protected $_data = array();

    /**
     * Index.
     *
     * @var \Elastica\Index Index object
     */
    protected $_index = null;

    const DEFAULT_REFRESH_INTERVAL = '1s';

    /**
     * Construct.
     *
     * @param \Elastica\Index $index Index object
     */
    public function __construct(BaseIndex $index)
    {
        $this->_index = $index;
    }

    /**
     * Returns the current settings of the index.
     *
     * If param is set, only specified setting is return.
     * 'index.' is added in front of $setting.
     *
     * @param string $setting OPTIONAL Setting name to return
     *
     * @return array|string|null Settings data
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/indices-update-settings.html
     */
    public function get($setting = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the number of replicas.
     *
     * @param int $replicas Number of replicas
     *
     * @return \Elastica\Response Response object
     */
    public function setNumberOfReplicas($replicas)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the index to read only.
     *
     * @param bool $readOnly (default = true)
     *
     * @return \Elastica\Response
     */
    public function setReadOnly($readOnly = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * getReadOnly.
     *
     * @return bool
     */
    public function getReadOnly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function getBlocksRead()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param bool $state OPTIONAL (default = true)
     *
     * @return \Elastica\Response
     */
    public function setBlocksRead($state = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function getBlocksWrite()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param bool $state OPTIONAL (default = true)
     *
     * @return \Elastica\Response
     */
    public function setBlocksWrite($state = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function getBlocksMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param bool $state OPTIONAL (default = true)
     *
     * @return \Elastica\Response
     */
    public function setBlocksMetadata($state = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the index refresh interval.
     *
     * Value can be for example 3s for 3 seconds or
     * 5m for 5 minutes. -1 refreshing is disabled.
     *
     * @param int $interval Number of milliseconds
     *
     * @return \Elastica\Response Response object
     */
    public function setRefreshInterval($interval)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the refresh interval.
     *
     * If no interval is set, the default interval is returned
     *
     * @return string Refresh interval
     */
    public function getRefreshInterval()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return merge policy.
     *
     * @return string Merge policy type
     */
    public function getMergePolicyType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets merge policy.
     *
     * @param string $type Merge policy type
     *
     * @return \Elastica\Response Response object
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/index-modules-merge.html
     */
    public function setMergePolicyType($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the specific merge policies.
     *
     * To have this changes made the index has to be closed and reopened
     *
     * @param string $key   Merge policy key (for ex. expunge_deletes_allowed)
     * @param string $value
     *
     * @return \Elastica\Response
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/index-modules-merge.html
     */
    public function setMergePolicy($key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the specific merge policy value.
     *
     * @param string $key Merge policy key (for ex. expunge_deletes_allowed)
     *
     * @return string Refresh interval
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/index-modules-merge.html
     */
    public function getMergePolicy($key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Can be used to set/update settings.
     *
     * @param array $data Arguments
     *
     * @return \Elastica\Response Response object
     */
    public function set(array $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the index object.
     *
     * @return \Elastica\Index Index object
     */
    public function getIndex()
    {
        return $this->_index;
    }

    /**
     * Updates the given settings for the index.
     *
     * With elasticsearch 0.16 the following settings are supported
     * - index.term_index_interval
     * - index.term_index_divisor
     * - index.translog.flush_threshold_ops
     * - index.translog.flush_threshold_size
     * - index.translog.flush_threshold_period
     * - index.refresh_interval
     * - index.merge.policy
     * - index.auto_expand_replicas
     *
     * @param array  $data   OPTIONAL Data array
     * @param string $method OPTIONAL Transfer method (default = \Elastica\Request::GET)
     *
     * @return \Elastica\Response Response object
     */
    public function request(array $data = array(), $method = Request::GET)
    {
        $path = '_settings';

        if (!empty($data)) {
            $data = array('index' => $data);
        }

        return $this->getIndex()->request($path, $method, $data);
    }
}
