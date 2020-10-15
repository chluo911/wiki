<?php

use MediaWiki\MediaWikiServices;

/**
 * Common code for test environment initialisation and teardown
 */
class TestSetup
{
    /**
     * This should be called before Setup.php, e.g. from the finalSetup() method
     * of a Maintenance subclass
     */
    public static function applyInitialConfig()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
