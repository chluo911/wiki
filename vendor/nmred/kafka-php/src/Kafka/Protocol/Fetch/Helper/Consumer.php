<?php
namespace Kafka\Protocol\Fetch\Helper;
/**
 * Description of Consumer
 *
 * @author daniel
 */
class Consumer extends HelperAbstract
{
    protected $consumer;

    protected $offsetStrategy;

    /**
     * Consumer constructor.
     * @param \Kafka\Consumer $consumer
     */
    public function __construct(\Kafka\Consumer $consumer)
    {
        $this->consumer = $consumer;
    }

    /**
     * @param \Kafka\Protocol\Fetch\Partition $partition
     */
    public function onPartitionEof($partition)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $streamKey
     */
    public function onStreamEof($streamKey)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $topicName
     */
    public function onTopicEof($topicName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
