<?php

/**
 * Tests for the SiteList class.
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
 * @since 1.21
 *
 * @ingroup Site
 * @ingroup Test
 *
 * @group Site
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class SiteListTest extends MediaWikiTestCase
{

    /**
     * Returns instances of SiteList implementing objects.
     * @return array
     */
    public function siteListProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns arrays with instances of Site implementing objects.
     * @return array
     */
    public function siteArrayProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::isEmpty
     */
    public function testIsEmpty(SiteList $sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::getSite
     */
    public function testGetSiteByGlobalId(SiteList $sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::getSiteByInternalId
     */
    public function testGetSiteByInternalId($sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::getSiteByNavigationId
     */
    public function testGetSiteByNavigationId($sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::hasSite
     */
    public function testHasGlobalId($sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::hasInternalId
     */
    public function testHasInternallId($sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::hasNavigationId
     */
    public function testHasNavigationId($sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     * @param SiteList $sites
     * @covers SiteList::getGlobalIdentifiers
     */
    public function testGetGlobalIdentifiers(SiteList $sites)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider siteListProvider
     *
     * @since 1.21
     *
     * @param SiteList $list
     * @covers SiteList::getSerializationData
     * @covers SiteList::unserialize
     */
    public function testSerialization(SiteList $list)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
