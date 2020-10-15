<?php

namespace MediaWiki\Session;

use MediaWikiTestCase;

/**
 * @group Session
 * @covers MediaWiki\Session\SessionId
 */
class SessionIdTest extends MediaWikiTestCase
{
    public function testEverything()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
