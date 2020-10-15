<?php

namespace MediaWiki\Auth;

/**
 * @group AuthManager
 * @covers MediaWiki\Auth\AbstractAuthenticationProvider
 */
class AbstractAuthenticationProviderTest extends \MediaWikiTestCase
{
    public function testAbstractAuthenticationProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
