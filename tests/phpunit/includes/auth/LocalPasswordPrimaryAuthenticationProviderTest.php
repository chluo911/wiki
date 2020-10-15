<?php

namespace MediaWiki\Auth;

/**
 * @group AuthManager
 * @group Database
 * @covers MediaWiki\Auth\LocalPasswordPrimaryAuthenticationProvider
 */
class LocalPasswordPrimaryAuthenticationProviderTest extends \MediaWikiTestCase
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
     * @param bool $loginOnly
     * @return LocalPasswordPrimaryAuthenticationProvider
     */
    protected function getProvider($loginOnly = false)
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

    public function testTestUserCanAuthenticate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSetPasswordResetFlag()
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
     * @param callable|bool $usernameTransform
     * @param string $type
     * @param bool $loginOnly
     * @param bool $changed
     */
    public function testProviderChangeAuthenticationData(
        $usernameTransform,
        $type,
        $loginOnly,
        $changed
    )
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
}
