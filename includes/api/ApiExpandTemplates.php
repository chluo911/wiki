<?php
/**
 *
 *
 * Created on Oct 05, 2007
 *
 * Copyright © 2007 Yuri Astrakhan "<Firstname><Lastname>@gmail.com"
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
 * API module that functions as a shortcut to the wikitext preprocessor. Expands
 * any templates in a provided string, and returns the result of this expansion
 * to the caller.
 *
 * @ingroup API
 */
class ApiExpandTemplates extends ApiBase
{
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
        return [
            'title' => [
                ApiBase::PARAM_DFLT => 'API',
            ],
            'text' => [
                ApiBase::PARAM_TYPE => 'text',
                ApiBase::PARAM_REQUIRED => true,
            ],
            'revid' => [
                ApiBase::PARAM_TYPE => 'integer',
            ],
            'prop' => [
                ApiBase::PARAM_TYPE => [
                    'wikitext',
                    'categories',
                    'properties',
                    'volatile',
                    'ttl',
                    'modules',
                    'jsconfigvars',
                    'encodedjsconfigvars',
                    'parsetree',
                ],
                ApiBase::PARAM_ISMULTI => true,
                ApiBase::PARAM_HELP_MSG_PER_VALUE => [],
            ],
            'includecomments' => false,
            'generatexml' => [
                ApiBase::PARAM_TYPE => 'boolean',
                ApiBase::PARAM_DEPRECATED => true,
            ],
        ];
    }

    protected function getExamplesMessages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getHelpUrls()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
