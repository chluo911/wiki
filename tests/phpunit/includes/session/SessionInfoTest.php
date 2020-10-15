<?php

namespace MediaWiki\Session;

use MediaWikiTestCase;

/**
 * @group Session
 * @group Database
 * @covers MediaWiki\Session\SessionInfo
 */
class SessionInfoTest extends MediaWikiTestCase
{
    public function testBasics()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCompare()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
