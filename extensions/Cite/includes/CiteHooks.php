<?php
/**
 * Cite extension hooks
 *
 * @file
 * @ingroup Extensions
 * @copyright 2011-2016 Cite VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see MIT-LICENSE.txt
 */

class CiteHooks
{
    /**
     * Convert the content model of a message that is actually JSON to JSON. This
     * only affects validation and UI when saving and editing, not loading the
     * content.
     *
     * @param Title $title
     * @param string $model
     * @return bool
     */
    public static function onContentHandlerDefaultModelFor(Title $title, &$model)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Conditionally register the unit testing module for the ext.cite.visualEditor module
     * only if that module is loaded
     *
     * @param array $testModules The array of registered test modules
     * @param ResourceLoader $resourceLoader The reference to the resource loader
     * @return true
     */
    public static function onResourceLoaderTestModules(
        array &$testModules,
        ResourceLoader &$resourceLoader
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Conditionally register resource loader modules that depends on the
     * VisualEditor MediaWiki extension.
     *
     * @param $resourceLoader
     * @return true
     */
    public static function onResourceLoaderRegisterModules(&$resourceLoader)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Callback for LinksUpdate hook
     * Post-output processing of references property, for proper db storage
     * Deferred to avoid performance overhead when outputting the page
     *
     * @param LinksUpdate $linksUpdate
     */
    public static function onLinksUpdate(LinksUpdate &$linksUpdate)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Callback for LinksUpdateComplete hook
     * If $wgCiteCacheRawReferencesOnParse is set to false, purges the cache
     * when references are modified
     *
     * @param LinksUpdate $linksUpdate
     */
    public static function onLinksUpdateComplete(LinksUpdate &$linksUpdate)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds extra variables to the global config
     */
    public static function onResourceLoaderGetConfigVars(array &$vars)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
