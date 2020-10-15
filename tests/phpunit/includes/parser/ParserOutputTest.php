<?php

/**
 * @group Database
 *        ^--- trigger DB shadowing because we are using Title magic
 */
class ParserOutputTest extends MediaWikiTestCase
{
    public static function provideIsLinkInternal()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test to make sure ParserOutput::isLinkInternal behaves properly
     * @dataProvider provideIsLinkInternal
     * @covers ParserOutput::isLinkInternal
     */
    public function testIsLinkInternal($shouldMatch, $server, $url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::setExtensionData
     * @covers ParserOutput::getExtensionData
     */
    public function testExtensionData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ParserOutput::setProperty
     * @covers ParserOutput::getProperty
     * @covers ParserOutput::unsetProperty
     * @covers ParserOutput::getProperties
     */
    public function testProperties()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
