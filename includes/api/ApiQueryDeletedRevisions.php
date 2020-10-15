<?php
/**
 * Created on Oct 3, 2014
 *
 * Copyright © 2014 Brad Jorsch "bjorsch@wikimedia.org"
 *
 * Heavily based on ApiQueryDeletedrevs,
 * Copyright © 2007 Roan Kattouw "<Firstname>.<Lastname>@gmail.com"
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
 * Query module to enumerate deleted revisions for pages.
 *
 * @ingroup API
 */
class ApiQueryDeletedRevisions extends ApiQueryRevisionsBase
{
    public function __construct(ApiQuery $query, $moduleName)
    {
        parent::__construct($query, $moduleName, 'drv');
    }

    protected function run(ApiPageSet $resultPageSet = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getAllowedParams()
    {
        return parent::getAllowedParams() + [
            'start' => [
                ApiBase::PARAM_TYPE => 'timestamp',
            ],
            'end' => [
                ApiBase::PARAM_TYPE => 'timestamp',
            ],
            'dir' => [
                ApiBase::PARAM_TYPE => [
                    'newer',
                    'older'
                ],
                ApiBase::PARAM_DFLT => 'older',
                ApiBase::PARAM_HELP_MSG => 'api-help-param-direction',
            ],
            'tag' => null,
            'user' => [
                ApiBase::PARAM_TYPE => 'user'
            ],
            'excludeuser' => [
                ApiBase::PARAM_TYPE => 'user'
            ],
            'continue' => [
                ApiBase::PARAM_HELP_MSG => 'api-help-param-continue',
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
        return 'https://www.mediawiki.org/wiki/API:Deletedrevisions';
    }
}
