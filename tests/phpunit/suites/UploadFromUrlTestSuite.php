<?php

require_once dirname(__DIR__) . '/includes/upload/UploadFromUrlTest.php';

class UploadFromUrlTestSuite extends PHPUnit_Framework_TestSuite
{
    public $savedGlobals = [];

    public static function addTables(&$tables)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Delete the specified files, if they exist.
     *
     * @param array $files Full paths to files to delete.
     */
    private static function deleteFiles($files)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Delete the specified directories, if they exist. Must be empty.
     *
     * @param array $dirs Full paths to directories to delete.
     */
    private static function deleteDirs($dirs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a dummy uploads directory which will contain a couple
     * of files in order to pass existence tests.
     *
     * @return string The directory
     */
    private function setupUploadDir()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function suite()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
