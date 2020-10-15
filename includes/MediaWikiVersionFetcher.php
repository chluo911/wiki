<?php

/**
 * Provides access to MediaWiki's version without requiring MediaWiki (or anything else)
 * being loaded first.
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MediaWikiVersionFetcher
{

    /**
     * Returns the MediaWiki version, in the format used by MediaWiki's wgVersion global.
     *
     * @return string
     * @throws RuntimeException
     */
    public function fetchVersion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
