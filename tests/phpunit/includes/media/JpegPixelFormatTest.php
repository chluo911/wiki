<?php
/**
 * Tests related to JPEG chroma subsampling via $wgJpegPixelFormat setting.
 *
 * @group Media
 * @group medium
 *
 * @todo covers tags
 */
class JpegPixelFormatTest extends MediaWikiMediaTestCase
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
     *
     * @dataProvider providePixelFormats
     */
    public function testPixelFormatRendering($sourceFile, $pixelFormat, $samplingFactor)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providePixelFormats()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
