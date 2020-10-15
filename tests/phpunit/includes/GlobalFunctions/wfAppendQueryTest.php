<?php

/**
 * @group GlobalFunctions
 * @covers ::wfAppendQuery
 */
class WfAppendQueryTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideAppendQuery
     */
    public function testAppendQuery($url, $query, $expected, $message = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideAppendQuery()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
