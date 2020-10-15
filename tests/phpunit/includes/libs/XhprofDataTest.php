<?php
/**
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
 * @uses XhprofData
 * @uses AutoLoader
 * @author Bryan Davis <bd808@wikimedia.org>
 * @copyright © 2014 Bryan Davis and Wikimedia Foundation.
 * @since 1.25
 */
class XhprofDataTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers XhprofData::splitKey
     * @dataProvider provideSplitKey
     */
    public function testSplitKey($key, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideSplitKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XhprofData::pruneData
     */
    public function testInclude()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Validate the structure of data returned by
     * Xhprof::getInclusiveMetrics(). This acts as a guard against unexpected
     * structural changes to the returned data in lieu of using a more heavy
     * weight typed response object.
     *
     * @covers XhprofData::getInclusiveMetrics
     */
    public function testInclusiveMetricsStructure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Validate the structure of data returned by
     * Xhprof::getCompleteMetrics(). This acts as a guard against unexpected
     * structural changes to the returned data in lieu of using a more heavy
     * weight typed response object.
     *
     * @covers XhprofData::getCompleteMetrics
     */
    public function testCompleteMetricsStructure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XhprofData::getCallers
     * @covers XhprofData::getCallees
     * @uses XhprofData
     */
    public function testEdges()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XhprofData::getCriticalPath
     * @uses XhprofData
     */
    public function testCriticalPath()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get an Xhprof instance that has been primed with a set of known testing
     * data. Tests for the Xhprof class should laregly be concerned with
     * evaluating the manipulations of the data collected by xhprof rather
     * than the data collection process itself.
     *
     * The returned Xhprof instance primed will be with a data set created by
     * running this trivial program using the PECL xhprof implementation:
     * @code
     * function bar( $x ) {
     *   if ( $x > 0 ) {
     *     bar($x - 1);
     *   }
     * }
     * function foo() {
     *   for ( $idx = 0; $idx < 2; $idx++ ) {
     *     bar( $idx );
     *     $x = strlen( 'abc' );
     *   }
     * }
     * xhprof_enable( XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY );
     * foo();
     * $x = xhprof_disable();
     * var_export( $x );
     * @endcode
     *
     * @return Xhprof
     */
    protected function getXhprofDataFixture(array $opts = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Assert that the given array has the described structure.
     *
     * @param array $struct Array of key => type mappings
     * @param array $actual Array to check
     * @param string $label
     */
    protected function assertArrayStructure($struct, $actual, $label = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
