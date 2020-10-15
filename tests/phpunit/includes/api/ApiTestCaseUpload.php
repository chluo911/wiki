<?php

/**
 * Abstract class to support upload tests
 */
abstract class ApiTestCaseUpload extends ApiTestCase
{
    /**
     * Fixture -- run before every test
     */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper function -- remove files and associated articles by Title
     *
     * @param Title $title Title to be removed
     *
     * @return bool
     */
    public function deleteFileByTitle($title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper function -- remove files and associated articles with a particular filename
     *
     * @param string $fileName Filename to be removed
     *
     * @return bool
     */
    public function deleteFileByFileName($fileName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Helper function -- given a file on the filesystem, find matching
     * content in the db (and associated articles) and remove them.
     *
     * @param string $filePath Path to file on the filesystem
     *
     * @return bool
     */
    public function deleteFileByContent($filePath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Fake an upload by dumping the file into temp space, and adding info to $_FILES.
     * (This is what PHP would normally do).
     *
     * @param string $fieldName Name this would have in the upload form
     * @param string $fileName Name to title this
     * @param string $type MIME type
     * @param string $filePath Path where to find file contents
     *
     * @throws Exception
     * @return bool
     */
    public function fakeUploadFile($fieldName, $fileName, $type, $filePath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function fakeUploadChunk($fieldName, $fileName, $type, & $chunkData)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Remove traces of previous fake uploads
     */
    public function clearFakeUploads()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
