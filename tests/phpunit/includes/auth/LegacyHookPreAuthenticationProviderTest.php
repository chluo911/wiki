<?php

namespace MediaWiki\Auth;

/**
 * @group AuthManager
 * @group Database
 * @covers MediaWiki\Auth\LegacyHookPreAuthenticationProvider
 */
class LegacyHookPreAuthenticationProviderTest extends \MediaWikiTestCase
{
    /**
     * Get an instance of the provider
     * @return LegacyHookPreAuthenticationProvider
     */
    protected function getProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a mock on a hook
     * @param string $hook
     * @param object $expect From $this->once(), $this->never(), etc.
     * @return object $mock->expects( $expect )->method( ... ).
     */
    protected function hook($hook, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Unsets a hook
     * @param string $hook
     */
    protected function unhook($hook)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // Stubs for hooks taking reference parameters
    public function onLoginUserMigrated($user, &$msg)
    {
    }
    public function onAbortLogin($user, $password, &$abort, &$msg)
    {
    }
    public function onAbortNewAccount($user, &$abortError, &$abortStatus)
    {
    }
    public function onAbortAutoAccount($user, &$abortError)
    {
    }

    /**
     * @dataProvider provideTestForAuthentication
     * @param string|null $username
     * @param string|null $password
     * @param string|null $msgForLoginUserMigrated
     * @param int|null $abortForAbortLogin
     * @param string|null $msgForAbortLogin
     * @param string|null $failMsg
     * @param array $failParams
     */
    public function testTestForAuthentication(
        $username,
        $password,
        $msgForLoginUserMigrated,
        $abortForAbortLogin,
        $msgForAbortLogin,
        $failMsg,
        $failParams = []
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideTestForAuthentication()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideTestForAccountCreation
     * @param string $msg
     * @param Status|null $status
     * @param StatusValue Result
     */
    public function testTestForAccountCreation($msg, $status, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideTestForAccountCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideTestUserForCreation
     * @param string|null $error
     * @param string|null $failMsg
     */
    public function testTestUserForCreation($error, $failMsg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideTestUserForCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
