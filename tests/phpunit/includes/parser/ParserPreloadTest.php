<?php
/**
 * Basic tests for Parser::getPreloadText
 * @author Antoine Musso
 */
class ParserPreloadTest extends MediaWikiTestCase
{
    /**
     * @var Parser
     */
    private $testParser;
    /**
     * @var ParserOptions
     */
    private $testParserOptions;
    /**
     * @var Title
     */
    private $title;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::getPreloadText
     */
    public function testPreloadSimpleText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::getPreloadText
     */
    public function testPreloadedPreIsUnstripped()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Parser::getPreloadText
     */
    public function testPreloadedNowikiIsUnstripped()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertPreloaded($expected, $text, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
