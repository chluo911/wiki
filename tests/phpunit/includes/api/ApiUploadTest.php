<?php
/**
 * n.b. Ensure that you can write to the images/ directory as the
 * user that will run tests.
 *
 * Note for reviewers: this intentionally duplicates functionality already in
 * "ApiSetup" and so on. This framework works better IMO and has less
 * strangeness (such as test cases inheriting from "ApiSetup"...) (and in the
 * case of the other Upload tests, this flat out just actually works... )
 *
 * @todo Port the other Upload tests, and other API tests to this framework
 *
 * @todo Broken test, reports false errors from time to time.
 * See https://phabricator.wikimedia.org/T28169
 *
 * @todo This is pretty sucky... needs to be prettified.
 *
 * @group API
 * @group Database
 * @group medium
 * @group Broken
 */
class ApiUploadTest extends ApiTestCaseUpload
{
    /**
     * Testing login
     * XXX this is a funny way of getting session context
     */
    public function testLogin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUploadRequiresToken($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUploadMissingParams($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUpload($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUploadZeroLength($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUploadSameFileName($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUploadSameContent($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUploadStash($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testLogin
     */
    public function testUploadChunks($session)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
