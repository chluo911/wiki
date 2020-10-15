<?php

/**
 * Checks that all API modules, core and extensions, have documentation i18n messages
 *
 * It won't catch everything since i18n messages can vary based on the wiki
 * configuration, but it should catch many cases for forgotten i18n.
 *
 * @group API
 */
class ApiDocumentationTest extends MediaWikiTestCase
{

    /** @var ApiMain */
    private static $main;

    /** @var array Sets of globals to test. Each array element is input to HashConfig */
    private static $testGlobals = [
        [
            'MiserMode' => false,
            'AllowCategorizedRecentChanges' => false,
        ],
        [
            'MiserMode' => true,
            'AllowCategorizedRecentChanges' => true,
        ],
    ];

    /**
     * Initialize/fetch the ApiMain instance for testing
     * @return ApiMain
     */
    private static function getMain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test a message
     * @param Message $msg
     * @param string $what Which message is being checked
     */
    private function checkMessage($msg, $what)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideDocumentationExists
     * @param string $path Module path
     * @param array $globals Globals to set
     */
    public function testDocumentationExists($path, array $globals)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideDocumentationExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return paths of all submodules in an ApiModuleManager, recursively
     * @param ApiModuleManager $manager
     * @return string[]
     */
    protected static function getSubModulePaths(ApiModuleManager $manager)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
