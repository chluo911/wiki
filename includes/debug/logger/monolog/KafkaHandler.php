<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

namespace MediaWiki\Logger\Monolog;

use Kafka\MetaDataFromKafka;
use Kafka\Produce;
use Kafka\Protocol\Decoder;
use MediaWiki\Logger\LoggerFactory;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

/**
 * Log handler sends log events to a kafka server.
 *
 * Constructor options array arguments:
 * * alias: map from monolog channel to kafka topic name. When no
 *	  alias exists the topic "monolog_$channel" will be used.
 * * swallowExceptions: Swallow exceptions that occur while talking to
 *    kafka. Defaults to false.
 * * logExceptions: Log exceptions talking to kafka here. Either null,
 *    the name of a channel to log to, or an object implementing
 *    FormatterInterface. Defaults to null.
 *
 * Requires the nmred/kafka-php library, version >= 1.3.0
 *
 * @since 1.26
 * @author Erik Bernhardson <ebernhardson@wikimedia.org>
 * @copyright © 2015 Erik Bernhardson and Wikimedia Foundation.
 */
class KafkaHandler extends AbstractProcessingHandler
{
    /**
     * @var Produce Sends requests to kafka
     */
    protected $produce;

    /**
     * @var array Optional handler configuration
     */
    protected $options;

    /**
     * @var array Map from topic name to partition this request produces to
     */
    protected $partitions = [];

    /**
     * @var array defaults for constructor options
     */
    private static $defaultOptions = [
        'alias' => [], // map from monolog channel to kafka topic
        'swallowExceptions' => false, // swallow exceptions sending records
        'logExceptions' => null, // A PSR3 logger to inform about errors
        'requireAck' => 0,
    ];

    /**
     * @param Produce $produce Kafka instance to produce through
     * @param array $options optional handler configuration
     * @param int $level The minimum logging level at which this handler will be triggered
     * @param bool $bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(
        Produce $produce,
        array $options,
        $level = Logger::DEBUG,
        $bubble = true
    ) {
        parent::__construct($level, $bubble);
        $this->produce = $produce;
        $this->options = array_merge(self::$defaultOptions, $options);
    }

    /**
     * Constructs the necessary support objects and returns a KafkaHandler
     * instance.
     *
     * @param string[] $kafkaServers
     * @param array $options
     * @param int $level The minimum logging level at which this handle will be triggered
     * @param bool $bubble Whether the messages that are handled can bubble the stack or not
     * @return KafkaHandler
     */
    public static function factory(
        $kafkaServers,
        array $options = [],
        $level = Logger::DEBUG,
        $bubble = true
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array $record)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritDoc}
     */
    public function handleBatch(array $batch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Send any records in the kafka client internal queue.
     */
    protected function send()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $topic Name of topic to get partition for
     * @return int|null The random partition to produce to for this request,
     *  or null if a partition could not be determined.
     */
    protected function getRandomPartition($topic)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds records for a channel to the Kafka client internal queue.
     *
     * @param string $channel Name of Monolog channel records belong to
     * @param array $records List of records to append
     */
    protected function addMessages($channel, array $records)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $message PSR3 compatible message string
     * @param array $context PSR3 compatible log context
     * @return bool true if caller should ignore warning
     */
    protected function warning($message, array $context = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
