<?php
/**
 * @group GlobalFunctions
 * @covers ::wfAssembleUrl
 */
class WfAssembleUrlTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideURLParts
     */
    public function testWfAssembleUrl($parts, $output)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider of URL parts for testing wfAssembleUrl()
     *
     * @return array
     */
    public static function provideURLParts()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
