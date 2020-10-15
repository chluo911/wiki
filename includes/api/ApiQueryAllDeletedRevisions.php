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
 * Query module to enumerate all deleted revisions.
 *
 * @ingroup API
 */
class ApiQueryAllDeletedRevisions extends ApiQueryRevisionsBase
{
    public function __construct(ApiQuery $query, $moduleName)
    {
        parent::__construct($query, $moduleName, 'adr');
    }

    /**
     * @param ApiPageSet $resultPageSet
     * @return void
     */
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
        $ret = parent::getAllowedParams() + [
            'user' => [
                ApiBase::PARAM_TYPE => 'user'
            ],
            'namespace' => [
                ApiBase::PARAM_ISMULTI => true,
                ApiBase::PARAM_TYPE => 'namespace',
            ],
            'start' => [
                ApiBase::PARAM_TYPE => 'timestamp',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'useronly' ] ],
            ],
            'end' => [
                ApiBase::PARAM_TYPE => 'timestamp',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'useronly' ] ],
            ],
            'dir' => [
                ApiBase::PARAM_TYPE => [
                    'newer',
                    'older'
                ],
                ApiBase::PARAM_DFLT => 'older',
                ApiBase::PARAM_HELP_MSG => 'api-help-param-direction',
            ],
            'from' => [
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'nonuseronly' ] ],
            ],
            'to' => [
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'nonuseronly' ] ],
            ],
            'prefix' => [
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'nonuseronly' ] ],
            ],
            'excludeuser' => [
                ApiBase::PARAM_TYPE => 'user',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'nonuseronly' ] ],
            ],
            'tag' => null,
            'continue' => [
                ApiBase::PARAM_HELP_MSG => 'api-help-param-continue',
            ],
            'generatetitles' => [
                ApiBase::PARAM_DFLT => false
            ],
        ];

        if ($this->getConfig()->get('MiserMode')) {
            $ret['user'][ApiBase::PARAM_HELP_MSG_APPEND] = [
                'apihelp-query+alldeletedrevisions-param-miser-user-namespace',
            ];
            $ret['namespace'][ApiBase::PARAM_HELP_MSG_APPEND] = [
                'apihelp-query+alldeletedrevisions-param-miser-user-namespace',
            ];
        }

        return $ret;
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
        return 'https://www.mediawiki.org/wiki/API:Alldeletedrevisions';
    }
}
