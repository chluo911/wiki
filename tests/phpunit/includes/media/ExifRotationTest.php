<?php
/**
 * Tests related to auto rotation.
 *
 * @group Media
 * @group medium
 *
 * @todo covers tags
 */
class ExifRotationTest extends MediaWikiMediaTestCase
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
     * Mark this test as creating thumbnail files.
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
     * @dataProvider provideFiles
     */
    public function testMetadata($name, $type, $info)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Same as before, but with auto-rotation set to auto.
     *
     * This sets scaler to image magick, which we should detect as
     * supporting rotation.
     * @dataProvider provideFiles
     */
    public function testMetadataAutoRotate($name, $type, $info)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *
     * @dataProvider provideFiles
     */
    public function testRotationRendering($name, $type, $info, $thumbs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Same as before, but with auto-rotation disabled.
     * @dataProvider provideFilesNoAutoRotate
     */
    public function testMetadataNoAutoRotate($name, $type, $info)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Same as before, but with auto-rotation set to auto and an image scaler that doesn't support it.
     * @dataProvider provideFilesNoAutoRotate
     */
    public function testMetadataAutoRotateUnsupported($name, $type, $info)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     *
     * @dataProvider provideFilesNoAutoRotate
     */
    public function testRotationRenderingNoAutoRotate($name, $type, $info, $thumbs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFilesNoAutoRotate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    const TEST_WIDTH = 100;
    const TEST_HEIGHT = 200;

    /**
     * @dataProvider provideBitmapExtractPreRotationDimensions
     */
    public function testBitmapExtractPreRotationDimensions($rotation, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideBitmapExtractPreRotationDimensions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
