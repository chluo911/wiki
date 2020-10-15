<?php

class JsonContentHandlerTest extends MediaWikiTestCase
{

    /**
     * @covers JsonContentHandler::makeEmptyContent
     */
    public function testMakeEmptyContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
