<?php

/**
 * @group Media
 */
class XCFHandlerTest extends MediaWikiMediaTestCase
{

    /** @var XCFHandler */
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
     * @param string $filename
     * @param int $expectedWidth Width
     * @param int $expectedHeight Height
     * @dataProvider provideGetImageSize
     * @covers XCFHandler::getImageSize
     */
    public function testGetImageSize($filename, $expectedWidth, $expectedHeight)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetImageSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $metadata Serialized metadata
     * @param int $expected One of the class constants of XCFHandler
     * @dataProvider provideIsMetadataValid
     * @covers XCFHandler::isMetadataValid
     */
    public function testIsMetadataValid($metadata, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideIsMetadataValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $filename
     * @param string $expected Serialized array
     * @dataProvider provideGetMetadata
     * @covers XCFHandler::getMetadata
     */
    public function testGetMetadata($filename, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
