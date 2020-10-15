<?php

namespace Liuggio\StatsdClient\Sender;


Class SysLogSender implements SenderInterface
{
    private $priority;

    public function __construct($priority = LOG_INFO)
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
    public function open()
    {
        syslog($this->priority, "statsd-client-open");

        return true;
    }

    /**
     * {@inheritDoc}
     */
    function write($handle, $message, $length = null)
    {
        syslog($this->priority, sprintf("statsd-client-write \"%s\" %d Bytes", $message, strlen($message)));

        return strlen($message);
    }

    /**
     * {@inheritDoc}
     */
    function close($handle)
    {
        syslog($this->priority, "statsd-client-close");
    }
}
