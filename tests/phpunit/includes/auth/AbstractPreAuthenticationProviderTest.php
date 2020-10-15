<?php

namespace MediaWiki\Auth;

/**
 * @group AuthManager
 * @covers MediaWiki\Auth\AbstractPreAuthenticationProvider
 */
class AbstractPreAuthenticationProviderTest extends \MediaWikiTestCase
{
    public function testAbstractPreAuthenticationProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
