<?php
/**
 *
 *
 * Created on Sep 7, 2006
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
 * A query action to enumerate revisions of a given page, or show top revisions
 * of multiple pages. Various pieces of information may be shown - flags,
 * comments, and the actual wiki markup of the rev. In the enumeration mode,
 * ranges of revisions may be requested and filtered.
 *
 * @ingroup API
 */
class ApiQueryRevisions extends ApiQueryRevisionsBase
{
    private $token = null;

    public function __construct(ApiQuery $query, $moduleName)
    {
        parent::__construct($query, $moduleName, 'rv');
    }

    private $tokenFunctions;

    /** @deprecated since 1.24 */
    protected function getTokenFunctions()
    {
        // tokenname => function
        // function prototype is func($pageid, $title, $rev)
        // should return token or false

        // Don't call the hooks twice
        if (isset($this->tokenFunctions)) {
            return $this->tokenFunctions;
        }

        // If we're in a mode that breaks the same-origin policy, no tokens can
        // be obtained
        if ($this->lacksSameOriginSecurity()) {
            return [];
        }

        $this->tokenFunctions = [
            'rollback' => [ 'ApiQueryRevisions', 'getRollbackToken' ]
        ];
        Hooks::run('APIQueryRevisionsTokens', [ &$this->tokenFunctions ]);

        return $this->tokenFunctions;
    }

    /**
     * @deprecated since 1.24
     * @param int $pageid
     * @param Title $title
     * @param Revision $rev
     * @return bool|string
     */
    public static function getRollbackToken($pageid, $title, $rev)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function run(ApiPageSet $resultPageSet = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getCacheMode($params)
    {
        if (isset($params['token'])) {
            return 'private';
        }
        return parent::getCacheMode($params);
    }

    public function getAllowedParams()
    {
        $ret = parent::getAllowedParams() + [
            'startid' => [
                ApiBase::PARAM_TYPE => 'integer',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'singlepageonly' ] ],
            ],
            'endid' => [
                ApiBase::PARAM_TYPE => 'integer',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'singlepageonly' ] ],
            ],
            'start' => [
                ApiBase::PARAM_TYPE => 'timestamp',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'singlepageonly' ] ],
            ],
            'end' => [
                ApiBase::PARAM_TYPE => 'timestamp',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'singlepageonly' ] ],
            ],
            'dir' => [
                ApiBase::PARAM_DFLT => 'older',
                ApiBase::PARAM_TYPE => [
                    'newer',
                    'older'
                ],
                ApiBase::PARAM_HELP_MSG => 'api-help-param-direction',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'singlepageonly' ] ],
            ],
            'user' => [
                ApiBase::PARAM_TYPE => 'user',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'singlepageonly' ] ],
            ],
            'excludeuser' => [
                ApiBase::PARAM_TYPE => 'user',
                ApiBase::PARAM_HELP_MSG_INFO => [ [ 'singlepageonly' ] ],
            ],
            'tag' => null,
            'token' => [
                ApiBase::PARAM_DEPRECATED => true,
                ApiBase::PARAM_TYPE => array_keys($this->getTokenFunctions()),
                ApiBase::PARAM_ISMULTI => true
            ],
            'continue' => [
                ApiBase::PARAM_HELP_MSG => 'api-help-param-continue',
            ],
        ];

        $ret['limit'][ApiBase::PARAM_HELP_MSG_INFO] = [ [ 'singlepageonly' ] ];

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
        return 'https://www.mediawiki.org/wiki/API:Revisions';
    }
}
