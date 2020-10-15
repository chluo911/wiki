<?php
/**
 * Job queue aggregator code that uses PhpRedis.
 *
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
 * @author Aaron Schulz
 */
use Psr\Log\LoggerInterface;

/**
 * Class to handle tracking information about all queues using PhpRedis
 *
 * The mediawiki/services/jobrunner background service must be set up and running.
 *
 * @ingroup JobQueue
 * @ingroup Redis
 * @since 1.21
 */
class JobQueueAggregatorRedis extends JobQueueAggregator
{
    /** @var RedisConnectionPool */
    protected $redisPool;
    /** @var LoggerInterface */
    protected $logger;
    /** @var array List of Redis server addresses */
    protected $servers;

    /**
     * @param array $params Possible keys:
     *   - redisConfig  : An array of parameters to RedisConnectionPool::__construct().
     *   - redisServers : Array of server entries, the first being the primary and the
     *                    others being fallback servers. Each entry is either a hostname/port
     *                    combination or the absolute path of a UNIX socket.
     *                    If a hostname is specified but no port, the standard port number
     *                    6379 will be used. Required.
     */
    public function __construct(array $params)
    {
        parent::__construct($params);
        $this->servers = isset($params['redisServers'])
            ? $params['redisServers']
            : [ $params['redisServer'] ]; // b/c
        $params['redisConfig']['serializer'] = 'none';
        $this->redisPool = RedisConnectionPool::singleton($params['redisConfig']);
        $this->logger = \MediaWiki\Logger\LoggerFactory::getInstance('redis');
    }

    protected function doNotifyQueueEmpty($wiki, $type)
    {
        return true; // managed by the service
    }

    protected function doNotifyQueueNonEmpty($wiki, $type)
    {
        return true; // managed by the service
    }

    protected function doGetAllReadyWikiQueues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doPurge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a connection to the server that handles all sub-queues for this queue
     *
     * @return RedisConnRef|bool Returns false on failure
     * @throws MWException
     */
    protected function getConnection()
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
    private function getReadyQueueKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $name
     * @return string
     */
    private function decodeQueueName($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
