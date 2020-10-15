<?php
/**
 * Created on Jan 1, 2013
 *
 * Copyright © 2013 Yuri Astrakhan "<Firstname><Lastname>@gmail.com"
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
abstract class ApiQueryContinueTestBase extends ApiQueryTestBase
{

    /**
     * Enable to print in-depth debugging info during the test run
     */
    protected $mVerbose = false;

    /**
     * Run query() and compare against expected values
     * @param array $expected
     * @param array $params Api parameters
     * @param int $expectedCount Max number of iterations
     * @param string $id Unit test id
     * @param bool $continue True to use smart continue
     * @return array Merged results data array
     */
    protected function checkC($expected, $params, $expectedCount, $id, $continue = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Run query in a loop until no more values are available
     * @param array $params Api parameters
     * @param int $expectedCount Max number of iterations
     * @param string $id Unit test id
     * @param bool $useContinue True to use smart continue
     * @return array Merged results data array
     * @throws Exception
     */
    protected function query($params, $expectedCount, $id, $useContinue = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $data
     */
    private function printResult($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private static function GetItems($q, $moduleName, $name, &$print)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Recursively merge the new result returned from the query to the previous results.
     * @param mixed $results
     * @param mixed $newResult
     * @param bool $numericIds If true, treat keys as ids to be merged instead of appending
     */
    protected function mergeResult(&$results, $newResult, $numericIds = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
