<?php
/**
 * Send information about this MediaWiki instance to MediaWiki.org.
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
 */

use Psr\Log\LoggerInterface;
use MediaWiki\Logger\LoggerFactory;

/**
 * Send information about this MediaWiki instance to MediaWiki.org.
 *
 * @since 1.28
 */
class Pingback
{

    /**
     * @var int Revision ID of the JSON schema that describes the pingback
     *   payload. The schema lives on MetaWiki, at
     *   <https://meta.wikimedia.org/wiki/Schema:MediaWikiPingback>.
     */
    const SCHEMA_REV = 15781718;

    /** @var LoggerInterface */
    protected $logger;

    /** @var Config */
    protected $config;

    /** @var string updatelog key (also used as cache/db lock key) */
    protected $key;

    /** @var string Randomly-generated identifier for this wiki */
    protected $id;

    /**
     * @param Config $config
     * @param LoggerInterface $logger
     */
    public function __construct(Config $config = null, LoggerInterface $logger = null)
    {
        $this->config = $config ?: RequestContext::getMain()->getConfig();
        $this->logger = $logger ?: LoggerFactory::getInstance(__CLASS__);
        $this->key = 'Pingback-' . $this->config->get('Version');
    }

    /**
     * Should a pingback be sent?
     * @return bool
     */
    private function shouldSend()
    {
        return $this->config->get('Pingback') && !$this->checkIfSent();
    }

    /**
     * Has a pingback already been sent for this MediaWiki version?
     * @return bool
     */
    private function checkIfSent()
    {
        $dbr = wfGetDB(DB_REPLICA);
        $sent = $dbr->selectField(
            'updatelog',
            '1',
            [ 'ul_key' => $this->key ],
            __METHOD__
        );
        return $sent !== false;
    }

    /**
     * Record the fact that we have sent a pingback for this MediaWiki version,
     * to ensure we don't submit data multiple times.
     */
    private function markSent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Acquire lock for sending a pingback
     *
     * This ensures only one thread can attempt to send a pingback at any given
     * time and that we wait an hour before retrying failed attempts.
     *
     * @return bool Whether lock was acquired
     */
    private function acquireLock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Collect basic data about this MediaWiki installation and return it
     * as an associative array conforming to the Pingback schema on MetaWiki
     * (<https://meta.wikimedia.org/wiki/Schema:MediaWikiPingback>).
     *
     * This is public so we can display it in the installer
     *
     * Developers: If you're adding a new piece of data to this, please ensure
     * that you update https://www.mediawiki.org/wiki/Manual:$wgPingback
     *
     * @return array
     */
    public function getSystemInfo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the EventLogging packet to be sent to the server
     *
     * @return array
     */
    private function getData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a unique, stable identifier for this wiki
     *
     * If the identifier does not already exist, create it and save it in the
     * database. The identifier is randomly-generated.
     *
     * @return string 32-character hex string
     */
    private function getOrCreatePingbackId()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Serialize pingback data and send it to MediaWiki.org via a POST
     * to its event beacon endpoint.
     *
     * The data encoding conforms to the expectations of EventLogging,
     * a software suite used by the Wikimedia Foundation for logging and
     * processing analytic data.
     *
     * Compare:
     * <https://github.com/wikimedia/mediawiki-extensions-EventLogging/
     *   blob/7e5fe4f1ef/includes/EventLogging.php#L32-L74>
     *
     * @param array $data Pingback data as an associative array
     * @return bool true on success, false on failure
     */
    private function postPingback(array $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Send information about this MediaWiki instance to MediaWiki.org.
     *
     * The data is structured and serialized to match the expectations of
     * EventLogging, a software suite used by the Wikimedia Foundation for
     * logging and processing analytic data.
     *
     * Compare:
     * <https://github.com/wikimedia/mediawiki-extensions-EventLogging/
     *   blob/7e5fe4f1ef/includes/EventLogging.php#L32-L74>
     *
     * The schema for the data is located at:
     * <https://meta.wikimedia.org/wiki/Schema:MediaWikiPingback>
     */
    public function sendPingback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Schedule a deferred callable that will check if a pingback should be
     * sent and (if so) proceed to send it.
     */
    public static function schedulePingback()
    {
        DeferredUpdates::addCallableUpdate(function () {
            $instance = new Pingback;
            if ($instance->shouldSend()) {
                $instance->sendPingback();
            }
        });
    }
}
