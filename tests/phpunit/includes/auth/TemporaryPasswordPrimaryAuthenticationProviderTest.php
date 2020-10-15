<?php

namespace MediaWiki\Auth;

use Wikimedia\ScopedCallback;

/**
 * @group AuthManager
 * @group Database
 * @covers MediaWiki\Auth\TemporaryPasswordPrimaryAuthenticationProvider
 */
class TemporaryPasswordPrimaryAuthenticationProviderTest extends \MediaWikiTestCase
{
    private $manager = null;
    private $config = null;
    private $validity = null;

    /**
     * Get an instance of the provider
     *
     * $provider->checkPasswordValidity is mocked to return $this->validity,
     * because we don't need to test that here.
     *
     * @param array $params
     * @return TemporaryPasswordPrimaryAuthenticationProvider
     */
    protected function getProvider($params = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function hookMailer($func = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testBasics()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testConfig()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTestUserCanAuthenticate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideGetAuthenticationRequests
     * @param string $action
     * @param array $options
     * @param array $expected
     */
    public function testGetAuthenticationRequests($action, $options, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetAuthenticationRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAuthentication()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideProviderAllowsAuthenticationDataChange
     * @param string $type
     * @param string $user
     * @param \Status $validity Result of the password validity check
     * @param \StatusValue $expect1 Expected result with $checkData = false
     * @param \StatusValue $expect2 Expected result with $checkData = true
     */
    public function testProviderAllowsAuthenticationDataChange(
        $type,
        $user,
        \Status $validity,
        \StatusValue $expect1,
        \StatusValue $expect2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideProviderAllowsAuthenticationDataChange()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideProviderChangeAuthenticationData
     * @param string $user
     * @param string $type
     * @param bool $changed
     */
    public function testProviderChangeAuthenticationData($user, $type, $changed)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideProviderChangeAuthenticationData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testProviderChangeAuthenticationDataEmail()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTestForAccountCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAccountCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAccountCreationEmail()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
