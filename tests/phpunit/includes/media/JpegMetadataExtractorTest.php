<?php
/**
 * @todo Could use a test of extended XMP segments. Hard to find programs that
 * create example files, and creating my own in vim propbably wouldn't
 * serve as a very good "test". (Adobe photoshop probably creates such files
 * but it costs money). The implementation of it currently in MediaWiki is based
 * solely on reading the standard, without any real world test files.
 *
 * @group Media
 * @covers JpegMetadataExtractor
 */
class JpegMetadataExtractorTest extends MediaWikiTestCase
{
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
     * We also use this test to test padding bytes don't
     * screw stuff up
     *
     * @param string $file Filename
     *
     * @dataProvider provideUtf8Comment
     */
    public function testUtf8Comment($file)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideUtf8Comment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** The file is iso-8859-1, but it should get auto converted */
    public function testIso88591Comment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** Comment values that are non-textual (random binary junk) should not be shown.
     * The example test file has a comment with a 0x5 byte in it which is a control character
     * and considered binary junk for our purposes.
     */
    public function testBinaryCommentStripped()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /* Very rarely a file can have multiple comments.
     *   Order of comments is based on order inside the file.
     */
    public function testMultipleComment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testXMPExtraction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPSIRExtraction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testXMPExtractionAltAppId()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testIPTCHashComparisionNoHash()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testIPTCHashComparisionBadHash()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testIPTCHashComparisionGoodHash()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testExifByteOrder()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
