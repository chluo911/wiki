<?php

/**
 * @group GlobalFunctions
 * @covers ::wfRemoveDotSegments
 */
class WfRemoveDotSegmentsTest extends MediaWikiTestCase
{
    /**
     * @dataProvider providePaths
     */
    public function testWfRemoveDotSegments($inputPath, $outputPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider of URL paths for testing wfRemoveDotSegments()
     *
     * @return array
     */
    public static function providePaths()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
