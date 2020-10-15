<?php

/**
 * @group GlobalFunctions
 * @group Database
 */
class GlobalWithDBTest extends MediaWikiTestCase
{
    /**
     * @dataProvider provideWfIsBadImageList
     * @covers ::wfIsBadImage
     */
    public function testWfIsBadImage($name, $title, $blacklist, $expected, $desc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideWfIsBadImageList()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
