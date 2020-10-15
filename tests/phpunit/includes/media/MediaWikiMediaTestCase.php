<?php
/**
 * Specificly for testing Media handlers. Sets up a FSFile backend
 */
abstract class MediaWikiMediaTestCase extends MediaWikiTestCase
{

    /** @var FSRepo */
    protected $repo;
    /** @var FSFileBackend */
    protected $backend;
    /** @var string */
    protected $filePath;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array Argument for FSRepo constructor
     */
    protected function getRepoOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The result of this method will set the file path to use,
     * as well as the protected member $filePath
     *
     * @return string Path where files are
     */
    protected function getFilePath()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Will the test create thumbnails (and thus do we need to set aside
     * a temporary directory for them?)
     *
     * Override this method if your test case creates thumbnails
     *
     * @return bool
     */
    protected function createsThumbnails()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Utility function: Get a new file object for a file on disk but not actually in db.
     *
     * File must be in the path returned by getFilePath()
     * @param string $name File name
     * @param string $type MIME type [optional]
     * @return UnregisteredLocalFile
     */
    protected function dataFile($name, $type = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
