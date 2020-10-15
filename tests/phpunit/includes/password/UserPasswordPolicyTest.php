<?php
/**
 * Testing for password-policy enforcement, based on a user's groups.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

class UserPasswordPolicyTest extends MediaWikiTestCase
{
    protected $policies = [
        'checkuser' => [
            'MinimalPasswordLength' => 10,
            'MinimumPasswordLengthToLogin' => 6,
            'PasswordCannotMatchUsername' => true,
        ],
        'sysop' => [
            'MinimalPasswordLength' => 8,
            'MinimumPasswordLengthToLogin' => 1,
            'PasswordCannotMatchUsername' => true,
        ],
        'default' => [
            'MinimalPasswordLength' => 4,
            'MinimumPasswordLengthToLogin' => 1,
            'PasswordCannotMatchBlacklist' => true,
            'MaximalPasswordLength' => 4096,
        ],
    ];

    protected $checks = [
        'MinimalPasswordLength' => 'PasswordPolicyChecks::checkMinimalPasswordLength',
        'MinimumPasswordLengthToLogin' => 'PasswordPolicyChecks::checkMinimumPasswordLengthToLogin',
        'PasswordCannotMatchUsername' => 'PasswordPolicyChecks::checkPasswordCannotMatchUsername',
        'PasswordCannotMatchBlacklist' => 'PasswordPolicyChecks::checkPasswordCannotMatchBlacklist',
        'MaximalPasswordLength' => 'PasswordPolicyChecks::checkMaximalPasswordLength',
    ];

    private function getUserPasswordPolicy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UserPasswordPolicy::getPoliciesForUser
     */
    public function testGetPoliciesForUser()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers UserPasswordPolicy::getPoliciesForGroups
     */
    public function testGetPoliciesForGroups()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCheckUserPassword
     * @covers UserPasswordPolicy::checkUserPassword
     */
    public function testCheckUserPassword($username, $groups, $password, $valid, $ok, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideCheckUserPassword()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideMaxOfPolicies
     * @covers UserPasswordPolicy::maxOfPolicies
     */
    public function testMaxOfPolicies($p1, $p2, $max, $msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideMaxOfPolicies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
