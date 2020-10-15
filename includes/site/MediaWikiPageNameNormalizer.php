<?php

namespace MediaWiki\Site;

use FormatJson;
use Http;
use UtfNormal\Validator;

/**
 * Service for normalizing a page name using a MediaWiki api.
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
 * @license GNU GPL v2+
 * @author John Erling Blad < jeblad@gmail.com >
 * @author Daniel Kinzler
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 * @author Marius Hoch
 */
class MediaWikiPageNameNormalizer
{

    /**
     * @var Http
     */
    private $http;

    /**
     * @param Http|null $http
     */
    public function __construct(Http $http = null)
    {
        if (!$http) {
            $http = new Http();
        }

        $this->http = $http;
    }

    /**
     * Returns the normalized form of the given page title, using the
     * normalization rules of the given site. If the given title is a redirect,
     * the redirect weill be resolved and the redirect target is returned.
     *
     * @note This actually makes an API request to the remote site, so beware
     *   that this function is slow and depends on an external service.
     *
     * @see Site::normalizePageName
     *
     * @since 1.27
     *
     * @param string $pageName
     * @param string $apiUrl
     *
     * @return string
     * @throws \MWException
     */
    public function normalizePageName($pageName, $apiUrl)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get normalization record for a given page title from an API response.
     *
     * @param array $externalData A reply from the API on a external server.
     * @param string $pageTitle Identifies the page at the external site, needing normalization.
     *
     * @return array|bool A 'page' structure representing the page identified by $pageTitle.
     */
    private static function extractPageRecord($externalData, $pageTitle)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
