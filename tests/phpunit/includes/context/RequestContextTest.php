<?php

/**
 * @group Database
 * @group RequestContext
 */
class RequestContextTest extends MediaWikiTestCase
{

    /**
     * Test the relationship between title and wikipage in RequestContext
     * @covers RequestContext::getWikiPage
     * @covers RequestContext::getTitle
     */
    public function testWikiPageTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers RequestContext::importScopedSession
     */
    public function testImportScopedSession()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
