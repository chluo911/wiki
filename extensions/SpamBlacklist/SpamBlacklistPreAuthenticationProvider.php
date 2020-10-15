<?php

use MediaWiki\Auth\AbstractPreAuthenticationProvider;

class SpamBlacklistPreAuthenticationProvider extends AbstractPreAuthenticationProvider
{
    public function testForAccountCreation($user, $creator, array $reqs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
