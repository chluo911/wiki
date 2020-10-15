<?php
/**
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
 */

/**
 * These tests validate the new continue functionality of the api query module by
 * doing multiple requests with varying parameters, merging the results, and checking
 * that the result matches the full data received in one no-limits call.
 *
 * @group API
 * @group Database
 * @group medium
 * @covers ApiQuery
 */
class ApiQueryContinueTest extends ApiQueryContinueTestBase
{
    protected $exceptionFromAddDBData;

    /**
     * Create a set of pages. These must not change, otherwise the tests might give wrong results.
     *
*@see MediaWikiTestCase::addDBDataOnce()
     */
    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - list=allpages
     * @medium
     */
    public function test1List()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - list=allpages|alltransclusions
     * @medium
     */
    public function test2Lists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - generator=allpages, prop=links
     * @medium
     */
    public function testGen1Prop()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - generator=allpages, prop=links|templates
     * @medium
     */
    public function testGen2Prop()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - generator=allpages, prop=links, list=alltransclusions
     * @medium
     */
    public function testGen1Prop1List()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - generator=allpages, prop=links|templates,
     *                       list=alllinks|alltransclusions, meta=siteinfo
     * @medium
     */
    public function testGen2Prop2List1Meta()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - generator=templates, prop=templates
     * @medium
     */
    public function testSameGenAndProp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test smart continue - generator=allpages, list=allpages
     * @medium
     */
    public function testSameGenList()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
