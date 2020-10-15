<?php

namespace MediaWiki\Session;

use MediaWikiTestCase;

/**
 * @group Session
 * @covers MediaWiki\Session\MetadataMergeException
 */
class MetadataMergeExceptionTest extends MediaWikiTestCase
{
    public function testBasics()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
