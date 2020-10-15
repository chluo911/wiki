<?php

namespace Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /** @var LoggerInterface */
    protected $logger;

    /**
     * Sets a logger.
     * 
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
