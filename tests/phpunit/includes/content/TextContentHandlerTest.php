<?php

/**
 * @group ContentHandler
 */
class TextContentHandlerTest extends MediaWikiLangTestCase
{
    public function testSupportsDirectEditing()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers SearchEngine::makeSearchFieldMapping
     * @covers ContentHandler::getFieldsForSearchIndex
     */
    public function testFieldsForIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
