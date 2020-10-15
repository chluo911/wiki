<?php
/**
 * @group GlobalFunctions
 * @covers ::wfBaseName
 */
class WfBaseNameTest extends MediaWikiTestCase
{
    /**
     * @dataProvider providePaths
     */
    public function testBaseName($fullpath, $basename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providePaths()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
