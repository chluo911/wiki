<?php

/**
 * @group ResourceLoader
 */
class ResourceLoaderClientHtmlTest extends PHPUnit_Framework_TestCase
{
    protected static function expandVariables($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected static function makeContext($extraQuery = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected static function makeModule(array $options = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected static function makeSampleModules()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderClientHtml::getDocumentAttributes
     */
    public function testGetDocumentAttributes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderClientHtml::__construct
     * @covers ResourceLoaderClientHtml::setModules
     * @covers ResourceLoaderClientHtml::setModuleStyles
     * @covers ResourceLoaderClientHtml::setModuleScripts
     * @covers ResourceLoaderClientHtml::getData
     * @covers ResourceLoaderClientHtml::getContext
     */
    public function testGetData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderClientHtml::setConfig
     * @covers ResourceLoaderClientHtml::setExemptStates
     * @covers ResourceLoaderClientHtml::getHeadHtml
     * @covers ResourceLoaderClientHtml::getLoad
     * @covers ResourceLoader::makeLoaderStateScript
     */
    public function testGetHeadHtml()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderClientHtml::getBodyHtml
     * @covers ResourceLoaderClientHtml::getLoad
     */
    public function testGetBodyHtml()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideMakeLoad()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideMakeLoad
     * @covers ResourceLoaderClientHtml::makeLoad
     * @covers ResourceLoaderClientHtml::makeContext
     * @covers ResourceLoader::makeModuleResponse
     * @covers ResourceLoaderModule::getModuleContent
     * @covers ResourceLoader::getCombinedVersion
     * @covers ResourceLoader::createLoaderURL
     * @covers ResourceLoader::createLoaderQuery
     * @covers ResourceLoader::makeLoaderQuery
     * @covers ResourceLoader::makeInlineScript
     */
    public function testMakeLoad(array $extraQuery, array $modules, $type, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
