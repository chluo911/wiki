<?php

/**
 * @group Media
 */
class BitmapMetadataHandlerTest extends MediaWikiTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test if having conflicting metadata values from different
     * types of metadata, that the right one takes precedence.
     *
     * Basically the file has IPTC and XMP metadata, the
     * IPTC should override the XMP, except for the multilingual
     * translation (to en) where XMP should win.
     * @covers BitmapMetadataHandler::Jpeg
     */
    public function testMultilingualCascade()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test for jpeg comments are being handled by
     * BitmapMetadataHandler correctly.
     *
     * There's more extensive tests of comment extraction in
     * JpegMetadataExtractorTests.php
     * @covers BitmapMetadataHandler::Jpeg
     */
    public function testJpegComment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Make sure a bad iptc block doesn't stop the other metadata
     * from being extracted.
     * @covers BitmapMetadataHandler::Jpeg
     */
    public function testBadIPTC()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers BitmapMetadataHandler::Jpeg
     */
    public function testIPTCDates()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * File has an invalid time (+ one valid but really weird time)
     * that shouldn't be included
     * @covers BitmapMetadataHandler::Jpeg
     */
    public function testIPTCDatesInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * XMP data should take priority over iptc data
     * when hash has been updated, but not when
     * the hash is wrong.
     * @covers BitmapMetadataHandler::addMetadata
     * @covers BitmapMetadataHandler::getMetadataArray
     */
    public function testMerging()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers BitmapMetadataHandler::png
     */
    public function testPNGXMP()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers BitmapMetadataHandler::png
     */
    public function testPNGNative()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers BitmapMetadataHandler::getTiffByteOrder
     */
    public function testTiffByteOrder()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
