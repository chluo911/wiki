<?php

/**
 * @group API
 */
class ApiErrorFormatterTest extends MediaWikiLangTestCase
{

    /**
     * @covers ApiErrorFormatter
     * @dataProvider provideErrorFormatter
     */
    public function testErrorFormatter(
        $format,
        $lang,
        $useDB,
        $expect1,
        $expect2,
        $expect3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideErrorFormatter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ApiErrorFormatter_BackCompat
     */
    public function testErrorFormatterBC()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
