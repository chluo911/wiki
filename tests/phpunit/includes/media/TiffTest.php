<?php

/**
 * @group Media
 */
class TiffTest extends MediaWikiTestCase
{

    /** @var TiffHandler */
    protected $handler;
    /** @var string */
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
     * @covers TiffHandler::getMetadata
     */
    public function testInvalidFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers TiffHandler::getMetadata
     */
    public function testTiffMetadataExtraction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
