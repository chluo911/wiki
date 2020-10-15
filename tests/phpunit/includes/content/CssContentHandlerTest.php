<?php

class CssContentHandlerTest extends MediaWikiLangTestCase
{

    /**
     * @dataProvider provideMakeRedirectContent
     * @covers CssContentHandler::makeRedirectContent
     */
    public function testMakeRedirectContent($title, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Keep this in sync with CssContentTest::provideGetRedirectTarget()
     */
    public static function provideMakeRedirectContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
