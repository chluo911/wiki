<?php

class JavaScriptContentHandlerTest extends MediaWikiLangTestCase
{

    /**
     * @dataProvider provideMakeRedirectContent
     * @covers JavaScriptContentHandler::makeRedirectContent
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
     * Keep this in sync with JavaScriptContentTest::provideGetRedirectTarget()
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
