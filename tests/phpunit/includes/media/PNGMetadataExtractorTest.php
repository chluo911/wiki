<?php

/**
 * @group Media
 * @covers PNGMetadataExtractor
 */
class PNGMetadataExtractorTest extends MediaWikiTestCase
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
     * Tests zTXt tag (compressed textual metadata)
     */
    public function testPngNativetZtxt()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test tEXt tag (Uncompressed textual metadata)
     */
    public function testPngNativeText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * tEXt tags must be encoded iso-8859-1 (vs iTXt which are utf-8)
     * Make sure non-ascii characters get converted properly
     */
    public function testPngNativeTextNonAscii()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test extraction of pHYs tags, which can tell what the
     * actual resolution of the image is (aka in dots per meter).
     */
    /*
    public function testPngPhysTag() {
        $meta = PNGMetadataExtractor::getMetadata( $this->filePath .
            'Png-native-test.png' );

        $this->assertArrayHasKey( 'text', $meta );
        $meta = $meta['text'];

        $this->assertEquals( '2835/100', $meta['XResolution'] );
        $this->assertEquals( '2835/100', $meta['YResolution'] );
        $this->assertEquals( 3, $meta['ResolutionUnit'] ); // 3 = cm
    }
    */

    /**
     * Given a normal static PNG, check the animation metadata returned.
     */
    public function testStaticPngAnimationMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given an animated APNG image file
     * check it gets animated metadata right.
     */
    public function testApngAnimationMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPngBitDepth8()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPngBitDepth1()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPngIndexColour()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPngRgbColour()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPngRgbNoAlphaColour()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPngGreyscaleColour()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPngGreyscaleNoAlphaColour()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
