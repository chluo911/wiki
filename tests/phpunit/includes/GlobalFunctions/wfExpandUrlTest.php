<?php
/**
 * @group GlobalFunctions
 * @covers ::wfExpandUrl
 */
class WfExpandUrlTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideExpandableUrls
     */
    public function testWfExpandUrl(
        $fullUrl,
        $shortUrl,
        $defaultProto,
        $server,
        $canServer,
        $httpsMode,
        $message
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provider of URL examples for testing wfExpandUrl()
     *
     * @return array
     */
    public static function provideExpandableUrls()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
