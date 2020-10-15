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

use LogicException;
use MediaWiki\Logger\LegacyLogger;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;
use UnexpectedValueException;

/**
 * Log handler that replicates the behavior of MediaWiki's wfErrorLog()
 * logging service. Log output can be directed to a local file, a PHP stream,
 * or a udp2log server.
 *
 * For udp2log output, the stream specification must have the form:
 * "udp://HOST:PORT[/PREFIX]"
 * where:
 * - HOST: IPv4, IPv6 or hostname
 * - PORT: server port
 * - PREFIX: optional (but recommended) prefix telling udp2log how to route
 * the log event. The special prefix "{channel}" will use the log event's
 * channel as the prefix value.
 *
 * When not targeting a udp2log stream this class will act as a drop-in
 * replacement for \Monolog\Handler\StreamHandler.
 *
 * @since 1.25
 * @author Bryan Davis <bd808@wikimedia.org>
 * @copyright © 2013 Bryan Davis and Wikimedia Foundation.
 */
class LegacyHandler extends AbstractProcessingHandler
{

    /**
     * Log sink descriptor
     * @var string $uri
     */
    protected $uri;

    /**
     * Filter log events using legacy rules
     * @var bool $useLegacyFilter
     */
    protected $useLegacyFilter;

    /**
     * Log sink
     * @var resource $sink
     */
    protected $sink;

    /**
     * @var string $error
     */
    protected $error;

    /**
     * @var string $host
     */
    protected $host;

    /**
     * @var int $port
     */
    protected $port;

    /**
     * @var string $prefix
     */
    protected $prefix;

    /**
     * @param string $stream Stream URI
     * @param bool $useLegacyFilter Filter log events using legacy rules
     * @param int $level Minimum logging level that will trigger handler
     * @param bool $bubble Can handled meesages bubble up the handler stack?
     */
    public function __construct(
        $stream,
        $useLegacyFilter = false,
        $level = Logger::DEBUG,
        $bubble = true
    ) {
        parent::__construct($level, $bubble);
        $this->uri = $stream;
        $this->useLegacyFilter = $useLegacyFilter;
    }

    /**
     * Open the log sink described by our stream URI.
     */
    protected function openSink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Custom error handler.
     * @param int $code Error number
     * @param string $msg Error message
     */
    protected function errorTrap($code, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Should we use UDP to send messages to the sink?
     * @return bool
     */
    protected function useUdp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function write(array $record)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function close()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
