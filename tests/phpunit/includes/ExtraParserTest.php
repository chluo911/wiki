<?php

/**
 * Parser-related tests that don't suit for parserTests.txt
 *
 * @group Database
 */
class ExtraParserTest extends MediaWikiTestCase
{

    /** @var ParserOptions */
    protected $options;
    /** @var Parser */
    protected $parser;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @see Bug 8689
     * @covers Parser::parse
     */
    public function testLongNumericLinesDontKillTheParser()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test the parser entry points
     * @covers Parser::parse
     */
    public function testParse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::preSaveTransform
     */
    public function testPreSaveTransform()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::preprocess
     */
    public function testPreprocess()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * cleanSig() makes all templates substs and removes tildes
     * @covers Parser::cleanSig
     */
    public function testCleanSig()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * cleanSig() should do nothing if disabled
     * @covers Parser::cleanSig
     */
    public function testCleanSigDisabled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * cleanSigInSig() just removes tildes
     * @dataProvider provideStringsForCleanSigInSig
     * @covers Parser::cleanSigInSig
     */
    public function testCleanSigInSig($in, $out)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideStringsForCleanSigInSig()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::getSection
     */
    public function testGetSection()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::replaceSection
     */
    public function testReplaceSection()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Templates and comments are not affected, but noinclude/onlyinclude is.
     * @covers Parser::getPreloadText
     */
    public function testGetPreloadText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Title $title
     * @param bool $parser
     *
     * @return array
     */
    public static function statelessFetchTemplate($title, $parser = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group Database
     * @covers Parser::parse
     */
    public function testTrackingCategory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group Database
     * @covers Parser::parse
     */
    public function testTrackingCategorySpecial()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
