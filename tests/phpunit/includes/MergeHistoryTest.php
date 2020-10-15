<?php

/**
 * @group Database
 */
class MergeHistoryTest extends MediaWikiTestCase
{

    /**
     * Make some pages to work with
     */
    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideIsValidMerge
     * @covers MergeHistory::isValidMerge
     * @param string $source Source page
     * @param string $dest Destination page
     * @param string|bool $timestamp Timestamp up to which revisions are merged (or false for all)
     * @param string|bool $error Expected error for test (or true for no error)
     */
    public function testIsValidMerge($source, $dest, $timestamp, $error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideIsValidMerge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test merge revision limit checking
     * @covers MergeHistory::isValidMerge
     */
    public function testIsValidMergeRevisionLimit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test user permission checking
     * @covers MergeHistory::checkPermissions
     */
    public function testCheckPermissions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test merged revision count
     * @covers MergeHistory::getMergedRevisionCount
     */
    public function testGetMergedRevisionCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
