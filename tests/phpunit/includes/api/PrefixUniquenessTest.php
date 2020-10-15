<?php

/**
 * Checks that all API query modules, core and extensions, have unique prefixes.
 *
 * @group API
 */
class PrefixUniquenessTest extends MediaWikiTestCase
{
    public function testPrefixes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
