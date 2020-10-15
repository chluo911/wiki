<?php
/**
 * Sanity checks for making sure registered resources are sane.
 *
 * @file
 * @author Antoine Musso
 * @author Niklas Laxström
 * @author Santhosh Thottingal
 * @author Timo Tijhof
 * @copyright © 2012, Antoine Musso
 * @copyright © 2012, Niklas Laxström
 * @copyright © 2012, Santhosh Thottingal
 * @copyright © 2012, Timo Tijhof
 *
 */
class ResourcesTest extends MediaWikiTestCase
{

    /**
     * @dataProvider provideResourceFiles
     */
    public function testFileExistence($filename, $module, $resource)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideMediaStylesheets
     */
    public function testStyleMedia($moduleName, $media, $filename, $css)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testVersionHash()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that nothing explicitly depends on the 'jquery' and 'mediawiki' modules.
     * They are always loaded, depending on them is unsupported and leads to unexpected behaviour.
     * TODO Modules can dynamically choose dependencies based on context. This method does not
     * test such dependencies. The same goes for testMissingDependencies() and
     * testUnsatisfiableDependencies().
     */
    public function testIllegalDependencies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that all modules specified as dependencies of other modules actually exist.
     */
    public function testMissingDependencies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that all specified messages actually exist.
     */
    public function testMissingMessages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that all dependencies of all modules are always satisfiable with the 'targets' defined
     * for the involved modules.
     *
     * Example: A depends on B. A has targets: mobile, desktop. B has targets: desktop. Therefore the
     * dependency is sometimes unsatisfiable: it's impossible to load module A on mobile.
     */
    public function testUnsatisfiableDependencies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * CSSMin::getLocalFileReferences should ignore url(...) expressions
     * that have been commented out.
     */
    public function testCommentedLocalFileReferences()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get all registered modules from ResouceLoader.
     * @return array
     */
    protected static function getAllModules()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get all stylesheet files from modules that are an instance of
     * ResourceLoaderFileModule (or one of its subclasses).
     */
    public static function provideMediaStylesheets()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get all resource files from modules that are an instance of
     * ResourceLoaderFileModule (or one of its subclasses).
     *
     * Since the raw data is stored in protected properties, we have to
     * overrride this through ReflectionObject methods.
     */
    public static function provideResourceFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
