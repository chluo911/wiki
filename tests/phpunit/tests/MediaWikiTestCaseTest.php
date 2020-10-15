<?php
use MediaWiki\Logger\LoggerFactory;
use MediaWiki\MediaWikiServices;
use Psr\Log\LoggerInterface;

/**
 * @covers MediaWikiTestCase
 * @author Addshore
 */
class MediaWikiTestCaseTest extends MediaWikiTestCase
{
    const GLOBAL_KEY_NONEXISTING = 'MediaWikiTestCaseTestGLOBAL-NONExisting';

    private static $startGlobals = [
        'MediaWikiTestCaseTestGLOBAL-ExistingString' => 'foo',
        'MediaWikiTestCaseTestGLOBAL-ExistingStringEmpty' => '',
        'MediaWikiTestCaseTestGLOBAL-ExistingArray' => [ 1, 'foo' => 'bar' ],
        'MediaWikiTestCaseTestGLOBAL-ExistingArrayEmpty' => [],
    ];

    public static function setUpBeforeClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function tearDownAfterClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideExistingKeysAndNewValues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideExistingKeysAndNewValues
     *
     * @covers MediaWikiTestCase::setMwGlobals
     * @covers MediaWikiTestCase::tearDown
     */
    public function testSetGlobalsAreRestoredOnTearDown($globalKey, $newValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideExistingKeysAndNewValues
     *
     * @covers MediaWikiTestCase::stashMwGlobals
     * @covers MediaWikiTestCase::tearDown
     */
    public function testStashedGlobalsAreRestoredOnTearDown($globalKey, $newValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MediaWikiTestCase::stashMwGlobals
     */
    public function testExceptionThrownWhenStashingNonExistentGlobals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testOverrideMwServices()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSetService()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MediaWikiTestCase::setLogger
     * @covers MediaWikiTestCase::restoreLogger
     */
    public function testLoggersAreRestoredOnTearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
