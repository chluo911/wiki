<?php

/**
 * Content handler for File: files
 * TODO: this handler s not used directly now,
 * but instead manually called by WikitextHandler.
 * This should be fixed in the future.
 */
class FileContentHandler extends WikitextContentHandler
{
    public function getFieldsForSearchIndex(SearchEngine $engine)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getDataForSearchIndex(
        WikiPage $page,
        ParserOutput $parserOutput,
        SearchEngine $engine
    )
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
