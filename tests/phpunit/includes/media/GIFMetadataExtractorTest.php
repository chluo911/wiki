<?php

/**
 * @group Media
 */
class GIFMetadataExtractorTest extends MediaWikiTestCase
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
     * Put in a file, and see if the metadata coming out is as expected.
     * @param string $filename
     * @param array $expected The extracted metadata.
     * @dataProvider provideGetMetadata
     * @covers GIFMetadataExtractor::getMetadata
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
