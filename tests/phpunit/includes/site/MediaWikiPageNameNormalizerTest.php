<?php

use MediaWiki\Site\MediaWikiPageNameNormalizer;

/**
 * @covers MediaWiki\Site\MediaWikiPageNameNormalizer
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
 * @since 1.27
 *
 * @group Site
 * @group medium
 *
 * @author Marius Hoch
 */
class MediaWikiPageNameNormalizerTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider normalizePageTitleProvider
     */
    public function testNormalizePageTitle($expected, $pageName, $getResponse)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function normalizePageTitleProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * @private
 * @see Http
 */
class MediaWikiPageNameNormalizerTestMockHttp extends Http
{

    /**
     * @var mixed
     */
    public static $response;

    public static function get($url, $options = [], $caller = __METHOD__)
    {
        PHPUnit_Framework_Assert::assertInternalType('string', $url);
        PHPUnit_Framework_Assert::assertInternalType('array', $options);
        PHPUnit_Framework_Assert::assertInternalType('string', $caller);

        return self::$response;
    }
}
