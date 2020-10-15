<?php

/**
 * Tests for the GenericArrayObject and deriving classes.
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
 * @since 1.20
 *
 * @ingroup Test
 * @group GenericArrayObject
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
abstract class GenericArrayObjectTest extends PHPUnit_Framework_TestCase
{

    /**
     * Returns objects that can serve as elements in the concrete
     * GenericArrayObject deriving class being tested.
     *
     * @since 1.20
     *
     * @return array
     */
    abstract public function elementInstancesProvider();

    /**
     * Returns the name of the concrete class being tested.
     *
     * @since 1.20
     *
     * @return string
     */
    abstract public function getInstanceClass();

    /**
     * Provides instances of the concrete class being tested.
     *
     * @since 1.20
     *
     * @return array
     */
    public function instanceProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.20
     *
     * @param array $elements
     *
     * @return GenericArrayObject
     */
    protected function getNew(array $elements = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider elementInstancesProvider
     *
     * @since 1.20
     *
     * @param array $elements
     *
     * @covers GenericArrayObject::__construct
     */
    public function testConstructor(array $elements)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider elementInstancesProvider
     *
     * @since 1.20
     *
     * @param array $elements
     *
     * @covers GenericArrayObject::isEmpty
     */
    public function testIsEmpty(array $elements)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider instanceProvider
     *
     * @since 1.20
     *
     * @param GenericArrayObject $list
     *
     * @covers GenericArrayObject::offsetUnset
     */
    public function testUnset(GenericArrayObject $list)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider elementInstancesProvider
     *
     * @since 1.20
     *
     * @param array $elements
     *
     * @covers GenericArrayObject::append
     */
    public function testAppend(array $elements)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @since 1.20
     *
     * @param callable $function
     *
     * @covers GenericArrayObject::getObjectType
     */
    protected function checkTypeChecks($function)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider elementInstancesProvider
     *
     * @since 1.20
     *
     * @param array $elements
     *
     * @covers GenericArrayObject::offsetSet
     */
    public function testOffsetSet(array $elements)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider instanceProvider
     *
     * @since 1.21
     *
     * @param GenericArrayObject $list
     *
     * @covers GenericArrayObject::getSerializationData
     * @covers GenericArrayObject::serialize
     * @covers GenericArrayObject::unserialize
     */
    public function testSerialization(GenericArrayObject $list)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
