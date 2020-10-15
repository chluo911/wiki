<?php

namespace Elastica\Test\Connection\Strategy;

class CallbackStrategyTestHelper
{
    public function __invoke($connections)
    {
        return $connections[0];
    }

    public function getFirstConnection($connections)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getFirstConnectionStatic($connections)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
