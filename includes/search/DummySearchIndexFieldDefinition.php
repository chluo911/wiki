<?php

/**
 * Dummy implementation of SearchIndexFieldDefinition for testing purposes.
 *
 * @since 1.28
 */
class DummySearchIndexFieldDefinition extends SearchIndexFieldDefinition
{

    /**
     * @param SearchEngine $engine
     *
     * @return array
     */
    public function getMapping(SearchEngine $engine)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
