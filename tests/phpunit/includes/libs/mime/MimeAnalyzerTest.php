<?php
class MimeMagicTest extends PHPUnit_Framework_TestCase
{
    /** @var MimeAnalyzer */
    private $mimeAnalyzer;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providerImproveTypeFromExtension
     * @param string $ext File extension (no leading dot)
     * @param string $oldMime Initially detected MIME
     * @param string $expectedMime MIME type after taking extension into account
     */
    public function testImproveTypeFromExtension($ext, $oldMime, $expectedMime)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function providerImproveTypeFromExtension()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test to make sure that encoder=ffmpeg2theora doesn't trigger
     * MEDIATYPE_VIDEO (bug 63584)
     */
    public function testOggRecognize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
