<?php
/**
 * Created on Feb 10, 2013
 *
 * Copyright © 2013 Yuri Astrakhan "<Firstname><Lastname>@gmail.com"
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
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

/** This class has some common functionality for testing query module
 */
abstract class ApiQueryTestBase extends ApiTestCase
{
    const PARAM_ASSERT = <<<STR
Each parameter must be an array of two elements,
first - an array of params to the API call,
and the second array - expected results as returned by the API
STR;

    /**
     * Merges all requests parameter + expected values into one
     * @param array $v,... List of arrays, each of which contains exactly two
     * @return array
     */
    protected function merge(/*...*/)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check that the parameter is a valid two element array,
     * with the first element being API request and the second - expected result
     * @param array $v
     * @return array
     */
    private function validateRequestExpectedPair($v)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Recursively merges the expected values in the $item into the $all
     * @param array &$all
     * @param array $item
     */
    private function mergeExpected(&$all, $item)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks that the request's result matches the expected results.
     * Assumes no rawcontinue and a complete batch.
     * @param array $values Array is a two element array( request, expected_results )
     * @param array $session
     * @param bool $appendModule
     * @param User $user
     */
    protected function check(
        $values,
        array $session = null,
        $appendModule = false,
        User $user = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertResult($exp, $result, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Recursively ksorts a result array and removes any 'pageid' keys.
     * @param array $result
     * @return array
     */
    private static function sanitizeResultArray($result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
