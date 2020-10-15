<?php

namespace MediaWiki\Tidy;

/**
 * Base class for HTML cleanup utilities
 */
abstract class TidyDriverBase
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * Return true if validate() can be used
     */
    public function supportsValidate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check HTML for errors, used if $wgValidateAllHtml = true.
     *
     * @param string $text
     * @param string &$errorStr Return the error string
     * @return bool Whether the HTML is valid
     */
    public function validate($text, &$errorStr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clean up HTML
     *
     * @param string $text HTML document fragment to clean up
     * @return string The corrected HTML output
     */
    abstract public function tidy($text);
}
