<?php
/**
 * Test the TitleBlacklist API.
 *
 * This wants to run with phpunit.php, like so:
 * cd $IP/tests/phpunit
 * php phpunit.php ../../extensions/TitleBlacklist/tests/ApiQueryTitleBlacklistTest.php
 *
 * The blacklist file is `testSource` and shared by all tests.
 *
 * Ian Baker <ian@wikimedia.org>
 */

ini_set('include_path', ini_get('include_path') . ':' . __DIR__ . '/../../../tests/phpunit/includes/api');

/**
 * @group medium
 **/
class ApiQueryTitleBlacklistTest extends ApiTestCase
{
    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify we allow a title which is not blacklisted
     */
    public function testCheckingUnlistedTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify tboverride works
     */
    public function testTboverride()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify a blacklisted title gives out an error.
     */
    public function testCheckingBlackListedTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests integration with the AntiSpoof extension
     */
    public function testAntiSpoofIntegration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
