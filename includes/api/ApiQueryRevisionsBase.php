<?php
/**
 *
 *
 * Created on Oct 3, 2014 as a split from ApiQueryRevisions
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
 * A base class for functions common to producing a list of revisions.
 *
 * @ingroup API
 */
abstract class ApiQueryRevisionsBase extends ApiQueryGeneratorBase
{
    protected $limit;
    protected $diffto;
    protected $difftotext;
    protected $difftotextpst;
    protected $expandTemplates;
    protected $generateXML;
    protected $section;
    protected $parseContent;
    protected $fetchContent;
    protected $contentFormat;
    protected $setParsedLimit = true;

    protected $fld_ids = false;
    protected $fld_flags = false;
    protected $fld_timestamp = false;
    protected $fld_size = false;
    protected $fld_sha1 = false;
    protected $fld_comment = false;
    protected $fld_parsedcomment = false;
    protected $fld_user = false;
    protected $fld_userid = false;
    protected $fld_content = false;
    protected $fld_tags = false;
    protected $fld_contentmodel = false;
    protected $fld_parsetree = false;

    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function executeGenerator($resultPageSet)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param ApiPageSet $resultPageSet
     * @return void
     */
    abstract protected function run(ApiPageSet $resultPageSet = null);

    /**
     * Parse the parameters into the various instance fields.
     *
     * @param array $params
     */
    protected function parseParameters($params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extract information from the Revision
     *
     * @param Revision $revision
     * @param object $row Should have a field 'ts_tags' if $this->fld_tags is set
     * @return array
     */
    protected function extractRevisionInfo(Revision $revision, $row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getCacheMode($params)
    {
        if ($this->userCanSeeRevDel()) {
            return 'private';
        }

        return 'public';
    }

    public function getAllowedParams()
    {
        return [
            'prop' => [
                ApiBase::PARAM_ISMULTI => true,
                ApiBase::PARAM_DFLT => 'ids|timestamp|flags|comment|user',
                ApiBase::PARAM_TYPE => [
                    'ids',
                    'flags',
                    'timestamp',
                    'user',
                    'userid',
                    'size',
                    'sha1',
                    'contentmodel',
                    'comment',
                    'parsedcomment',
                    'content',
                    'tags',
                    'parsetree',
                ],
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-prop',
                ApiBase::PARAM_HELP_MSG_PER_VALUE => [
                    'ids' => 'apihelp-query+revisions+base-paramvalue-prop-ids',
                    'flags' => 'apihelp-query+revisions+base-paramvalue-prop-flags',
                    'timestamp' => 'apihelp-query+revisions+base-paramvalue-prop-timestamp',
                    'user' => 'apihelp-query+revisions+base-paramvalue-prop-user',
                    'userid' => 'apihelp-query+revisions+base-paramvalue-prop-userid',
                    'size' => 'apihelp-query+revisions+base-paramvalue-prop-size',
                    'sha1' => 'apihelp-query+revisions+base-paramvalue-prop-sha1',
                    'contentmodel' => 'apihelp-query+revisions+base-paramvalue-prop-contentmodel',
                    'comment' => 'apihelp-query+revisions+base-paramvalue-prop-comment',
                    'parsedcomment' => 'apihelp-query+revisions+base-paramvalue-prop-parsedcomment',
                    'content' => 'apihelp-query+revisions+base-paramvalue-prop-content',
                    'tags' => 'apihelp-query+revisions+base-paramvalue-prop-tags',
                    'parsetree' => [ 'apihelp-query+revisions+base-paramvalue-prop-parsetree',
                        CONTENT_MODEL_WIKITEXT ],
                ],
            ],
            'limit' => [
                ApiBase::PARAM_TYPE => 'limit',
                ApiBase::PARAM_MIN => 1,
                ApiBase::PARAM_MAX => ApiBase::LIMIT_BIG1,
                ApiBase::PARAM_MAX2 => ApiBase::LIMIT_BIG2,
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-limit',
            ],
            'expandtemplates' => [
                ApiBase::PARAM_DFLT => false,
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-expandtemplates',
            ],
            'generatexml' => [
                ApiBase::PARAM_DFLT => false,
                ApiBase::PARAM_DEPRECATED => true,
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-generatexml',
            ],
            'parse' => [
                ApiBase::PARAM_DFLT => false,
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-parse',
            ],
            'section' => [
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-section',
            ],
            'diffto' => [
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-diffto',
            ],
            'difftotext' => [
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-difftotext',
            ],
            'difftotextpst' => [
                ApiBase::PARAM_DFLT => false,
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-difftotextpst',
            ],
            'contentformat' => [
                ApiBase::PARAM_TYPE => ContentHandler::getAllContentFormats(),
                ApiBase::PARAM_HELP_MSG => 'apihelp-query+revisions+base-param-contentformat',
            ],
        ];
    }
}
