<?php
/**
 *
 *
 * Created on Oct 22, 2006
 *
 * Copyright © 2006 Yuri Astrakhan "<Firstname><Lastname>@gmail.com"
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
 * API Serialized PHP output formatter
 * @ingroup API
 */
class ApiFormatPhp extends ApiFormatBase
{
    public function getMimeType()
    {
        return 'application/vnd.php.serialized';
    }

    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getAllowedParams()
    {
        $ret = parent::getAllowedParams() + [
            'formatversion' => [
                ApiBase::PARAM_TYPE => [ 1, 2, 'latest' ],
                ApiBase::PARAM_DFLT => 1,
                ApiBase::PARAM_HELP_MSG => 'apihelp-php-param-formatversion',
            ],
        ];
        return $ret;
    }
}
