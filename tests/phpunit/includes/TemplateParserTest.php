<?php

/**
 * @group Templates
 */
class TemplateParserTest extends MediaWikiTestCase
{
    protected $templateDir;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideProcessTemplate
     * @covers TemplateParser::processTemplate
     * @covers TemplateParser::getTemplate
     * @covers TemplateParser::getTemplateFilename
     */
    public function testProcessTemplate($name, $args, $result, $exception = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideProcessTemplate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
