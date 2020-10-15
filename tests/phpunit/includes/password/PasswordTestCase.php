<?php
/**
 * Testing framework for the password hashes
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

/**
 * @since 1.24
 */
abstract class PasswordTestCase extends MediaWikiTestCase
{
    /**
     * @var PasswordFactory
     */
    protected $passwordFactory;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return an array of configs to be used for this class's password type.
     *
     * @return array[]
     */
    abstract protected function getTypeConfigs();

    /**
     * An array of tests in the form of (bool, string, string), where the first
     * element is whether the second parameter (a password hash) and the third
     * parameter (a password) should match.
     * @return array
     * @throws MWException
     * @abstract
     */
    public static function providePasswordTests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providePasswordTests
     */
    public function testHashing($shouldMatch, $hash, $password)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providePasswordTests
     */
    public function testStringSerialization($shouldMatch, $hash, $password)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providePasswordTests
     * @covers InvalidPassword::equals
     * @covers InvalidPassword::toString
     */
    public function testInvalidUnequalNormal($shouldMatch, $hash, $password)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
