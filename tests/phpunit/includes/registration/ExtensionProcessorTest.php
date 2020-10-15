<?php

class ExtensionProcessorTest extends MediaWikiTestCase
{
    private $dir;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * 'name' is absolutely required
     *
     * @var array
     */
    public static $default = [
        'name' => 'FooBar',
    ];

    /**
     * @covers ExtensionProcessor::extractInfo
     */
    public function testExtractInfo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideRegisterHooks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExtensionProcessor::extractHooks
     * @dataProvider provideRegisterHooks
     */
    public function testRegisterHooks($pre, $info, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExtensionProcessor::extractConfig1
     */
    public function testExtractConfig()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideExtractExtensionMessagesFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExtensionProcessor::extractExtensionMessagesFiles
     * @dataProvider provideExtractExtensionMessagesFiles
     */
    public function testExtractExtensionMessagesFiles($input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideExtractMessagesDirs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExtensionProcessor::extractMessagesDirs
     * @dataProvider provideExtractMessagesDirs
     */
    public function testExtractMessagesDirs($input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExtensionProcessor::extractCredits
     */
    public function testExtractCredits()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ExtensionProcessor::extractResourceLoaderModules
     * @dataProvider provideExtractResourceLoaderModules
     */
    public function testExtractResourceLoaderModules($input, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideExtractResourceLoaderModules()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideSetToGlobal()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testGlobalSettingsDocumentedInSchema()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Allow overriding the default value of $this->globals
 * so we can test merging
 */
class MockExtensionProcessor extends ExtensionProcessor
{
    public function __construct($globals = [])
    {
        $this->globals = $globals + $this->globals;
    }
}
