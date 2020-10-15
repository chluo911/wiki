<?php

/**
 * @group Upload
 */
class UploadBaseTest extends MediaWikiTestCase
{

    /** @var UploadTestHandler */
    protected $upload;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * First checks the return code
     * of UploadBase::getTitle() and then the actual returned title
     *
     * @dataProvider provideTestTitleValidation
     * @covers UploadBase::getTitle
     */
    public function testTitleValidation($srcFilename, $dstFilename, $code, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test various forms of valid and invalid titles that can be supplied.
     */
    public static function provideTestTitleValidation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test the upload verification functions
     * @covers UploadBase::verifyUpload
     */
    public function testVerifyUpload()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Helper used to create an empty file of size $size.
    private function createFileOfSize($size)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * test uploading a 100 bytes file with $wgMaxUploadSize = 100
     *
     * This method should be abstracted so we can test different settings.
     */
    public function testMaxUploadSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCheckSvgScriptCallback
     */
    public function testCheckSvgScriptCallback($svg, $wellFormed, $filterMatch, $message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCheckSvgScriptCallback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCheckXMLEncodingMissmatch
     */
    public function testCheckXMLEncodingMissmatch($fileContents, $evil)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideCheckXMLEncodingMissmatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class UploadTestHandler extends UploadBase
{
    public function initializeFromRequest(&$request)
    {
    }

    public function testTitleValidation($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Almost the same as UploadBase::detectScriptInSvg, except it's
     * public, works on an xml string instead of filename, and returns
     * the result instead of interpreting them.
     */
    public function checkSvgString($svg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
