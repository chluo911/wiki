<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker: */
// +---------------------------------------------------------------------------
// | SWAN [ $_SWANBR_SLOGAN_$ ]
// +---------------------------------------------------------------------------
// | Copyright $_SWANBR_COPYRIGHT_$
// +---------------------------------------------------------------------------
// | Version  $_SWANBR_VERSION_$
// +---------------------------------------------------------------------------
// | Licensed ( $_SWANBR_LICENSED_URL_$ )
// +---------------------------------------------------------------------------
// | $_SWANBR_WEB_DOMAIN_$
// +---------------------------------------------------------------------------

namespace Kafka;

/**
+------------------------------------------------------------------------------
* Kafka protocol since Kafka v0.8
+------------------------------------------------------------------------------
*
* @package
* @version $_SWANBR_VERSION_$
* @copyright Copyleft
* @author $_SWANBR_AUTHOR_$
+------------------------------------------------------------------------------
*/

class ZooKeeper implements \Kafka\ClusterMetaData
{
    // {{{ consts

    /**
     * get all broker
     */
    const BROKER_PATH = '/brokers/ids';

    /**
     * get broker detail
     */
    const BROKER_DETAIL_PATH = '/brokers/ids/%d';

    /**
     * get topic detail
     */
    const TOPIC_PATCH = '/brokers/topics/%s';

    /**
     * get partition state
     */
    const PARTITION_STATE = '/brokers/topics/%s/partitions/%d/state';

    /**
     * register consumer
     */
    const REG_CONSUMER = '/consumers/%s/ids/%s';

    /**
     * list consumer
     */
    const LIST_CONSUMER = '/consumers/%s/ids';

    /**
     * partition owner
     */
    const PARTITION_OWNER = '/consumers/%s/owners/%s/%d';

    // }}}
    // {{{ members

    /**
     * zookeeper
     *
     * @var mixed
     * @access private
     */
    private $zookeeper = null;

    // }}}
    // {{{ functions
    // {{{ public function __construct()

    /**
     * __construct
     *
     * @access public
     * @param $hostList
     * @param null $timeout
     */
    public function __construct($hostList, $timeout = null)
    {
        if (!is_null($timeout) && is_numeric($timeout)) {
            $this->zookeeper = new \ZooKeeper($hostList, null, $timeout);
        } else {
            $this->zookeeper = new \ZooKeeper($hostList);
        }
    }

    // }}}
    // {{{ public function listBrokers()

    /**
     * get broker list using zookeeper
     *
     * @access public
     * @return array
     */
    public function listBrokers()
    {
        $result = array();
        $lists = $this->zookeeper->getChildren(self::BROKER_PATH);
        if (!empty($lists)) {
            foreach ($lists as $brokerId) {
                $brokerDetail = $this->getBrokerDetail($brokerId);
                if (!$brokerDetail) {
                    continue;
                }
                $result[$brokerId] = $brokerDetail;
            }
        }

        return $result;
    }

    // }}}
    // {{{ public function getBrokerDetail()

    /**
     * get broker detail
     *
     * @param integer $brokerId
     * @access public
     * @return string|bool
     */
    public function getBrokerDetail($brokerId)
    {
        $result = array();
        $path = sprintf(self::BROKER_DETAIL_PATH, (int) $brokerId);
        if ($this->zookeeper->exists($path)) {
            $result = $this->zookeeper->get($path);
            if (!$result) {
                return false;
            }

            $result = json_decode($result, true);
        }

        return $result;
    }

    // }}}
    // {{{ public function getTopicDetail()

    /**
     * get topic detail
     *
     * @param string $topicName
     * @access public
     * @return string|bool
     */
    public function getTopicDetail($topicName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function getPartitionState()

    /**
     * get partition state
     *
     * @param string $topicName
     * @param integer $partitionId
     * @access public
     * @return string|bool
     */
    public function getPartitionState($topicName, $partitionId = 0)
    {
        $result = array();
        $path = sprintf(self::PARTITION_STATE, (string) $topicName, (int) $partitionId);
        if ($this->zookeeper->exists($path)) {
            $result = $this->zookeeper->get($path);
            if (!$result) {
                return false;
            }
            $result = json_decode($result, true);
        }

        return $result;
    }

    // }}}
    // {{{ public function registerConsumer()

    /**
     * register consumer
     *
     * @param $groupId
     * @param integer $consumerId
     * @param array $topics
     * @access public
     */
    public function registerConsumer($groupId, $consumerId, $topics = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function listConsumer()

    /**
     * list consumer
     *
     * @param string $groupId
     * @access public
     * @return array
     */
    public function listConsumer($groupId)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function getConsumersPerTopic()

    /**
     * get consumer per topic
     *
     * @param string $groupId
     * @access public
     * @return array
     */
    public function getConsumersPerTopic($groupId)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ public function addPartitionOwner()

    /**
     * add partition owner
     *
     * @param string $groupId
     * @param string $topicName
     * @param integer $partitionId
     * @param string $consumerId
     * @access public
     * @return void
     */
    public function addPartitionOwner($groupId, $topicName, $partitionId, $consumerId)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ protected function makeZkPath()

    /**
     * Equivalent of "mkdir -p" on ZooKeeper
     *
     * @param string $path  The path to the node
     * @param mixed  $value The value to assign to each new node along the path
     *
     * @return bool
     */
    protected function makeZkPath($path, $value = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // {{{ protected function makeZkNode()

    /**
     * Create a node on ZooKeeper at the given path
     *
     * @param string $path  The path to the node
     * @param mixed  $value The value to assign to the new node
     *
     * @return bool
     */
    protected function makeZkNode($path, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // }}}
    // }}}
}
