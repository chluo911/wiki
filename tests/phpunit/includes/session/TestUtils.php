<?php

namespace MediaWiki\Session;

use Psr\Log\LoggerInterface;

/**
 * Utility functions for Session unit tests
 */
class TestUtils
{

    /**
     * Override the singleton for unit testing
     * @param SessionManager|null $manager
     * @return \\Wikimedia\ScopedCallback|null
     */
    public static function setSessionManagerSingleton(SessionManager $manager = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If you need a SessionBackend for testing but don't want to create a real
     * one, use this.
     * @return SessionBackend Unconfigured! Use reflection to set any private
     *  fields necessary.
     */
    public static function getDummySessionBackend()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If you need a Session for testing but don't want to create a backend to
     * construct one, use this.
     * @param object $backend Object to serve as the SessionBackend
     * @param int $index Index
     * @param LoggerInterface $logger
     * @return Session
     */
    public static function getDummySession($backend = null, $index = -1, $logger = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
