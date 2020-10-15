<?php

/**
 * @group Media
 */
class ExifBitmapTest extends MediaWikiMediaTestCase
{

    /**
     * @var ExifBitmapHandler
     */
    protected $handler;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::isMetadataValid
     */
    public function testIsOldBroken()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::isMetadataValid
     */
    public function testIsBrokenFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::isMetadataValid
     */
    public function testIsInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::isMetadataValid
     */
    public function testGoodMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::isMetadataValid
     */
    public function testIsOldGood()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handle metadata from paged tiff handler (gotten via instant commons) gracefully.
     * @covers ExifBitmapHandler::isMetadataValid
     */
    public function testPagedTiffHandledGracefully()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::convertMetadataVersion
     */
    public function testConvertMetadataLatest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::convertMetadataVersion
     */
    public function testConvertMetadataToOld()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::convertMetadataVersion
     */
    public function testConvertMetadataSoftware()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExifBitmapHandler::convertMetadataVersion
     */
    public function testConvertMetadataSoftwareNormal()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideSwappingICCProfile
     * @covers ExifBitmapHandler::swapICCProfile
     */
    public function testSwappingICCProfile(
        $sourceFilename,
        $controlFilename,
        $newProfileFilename,
        $oldProfileName
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideSwappingICCProfile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
