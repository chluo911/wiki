<?php

use MediaWiki\Auth\AuthManager;

/**
 * @group Database
 */
class PasswordResetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideIsAllowed
     */
    public function testIsAllowed(
        $passwordResetRoutes,
        $enableEmail,
        $allowsAuthenticationDataChange,
        $canEditPrivate,
        $canSeePassword,
        $userIsBlocked,
        $isAllowed,
        $isAllowedToDisplayPassword
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideIsAllowed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testExecute_email()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
