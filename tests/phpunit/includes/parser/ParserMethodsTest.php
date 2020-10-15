<?php

/**
 * @group Database
 */

class ParserMethodsTest extends MediaWikiLangTestCase
{
    public static function providePreSaveTransform()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providePreSaveTransform
     * @covers Parser::preSaveTransform
     */
    public function testPreSaveTransform($text, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideStripOuterParagraph()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideStripOuterParagraph
     * @covers Parser::stripOuterParagraph
     */
    public function testStripOuterParagraph($text, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException MWException
     * @expectedExceptionMessage Parser state cleared while parsing.
     *  Did you call Parser::parse recursively?
     * @covers Parser::lock
     */
    public function testRecursiveParse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function helperParserFunc($input, $args, $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::callParserFunction
     */
    public function testCallParserFunction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::parse
     * @covers ParserOutput::getSections
     */
    public function testGetSections()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideNormalizeLinkUrl
     * @covers Parser::normalizeLinkUrl
     * @covers Parser::normalizeUrlComponent
     */
    public function testNormalizeLinkUrl($explanation, $url, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideNormalizeLinkUrl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // @todo Add tests for cleanSig() / cleanSigInSig(), getSection(),
    // replaceSection(), getPreloadText()
}
