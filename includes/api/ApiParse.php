<?php
/**
 * Created on Dec 01, 2007
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
 * @ingroup API
 */
class ApiParse extends ApiBase
{

    /** @var string $section */
    private $section = null;

    /** @var Content $content */
    private $content = null;

    /** @var Content $pstContent */
    private $pstContent = null;

    private function checkReadPermissions(Title $title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Constructs a ParserOptions object
     *
     * @param WikiPage $pageObj
     * @param array $params
     *
     * @return array [ ParserOptions, ScopedCallback, bool $suppressCache ]
     */
    protected function makeParserOptions(WikiPage $pageObj, array $params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param WikiPage $page
     * @param ParserOptions $popts
     * @param int $pageId
     * @param bool $getWikitext
     * @return ParserOutput
     */
    private function getParsedContent(WikiPage $page, $popts, $pageId = null, $getWikitext = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the content for the given page and the requested section.
     *
     * @param WikiPage $page
     * @param int $pageId
     * @return Content
     */
    private function getContent(WikiPage $page, $pageId = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extract the requested section from the given Content
     *
     * @param Content $content
     * @param string $what Identifies the content in error messages, e.g. page title.
     * @return Content|bool
     */
    private function getSectionContent(Content $content, $what)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This mimicks the behavior of EditPage in formatting a summary
     *
     * @param Title $title of the page being parsed
     * @param Array $params the API parameters of the request
     * @return Content|bool
     */
    private function formatSummary($title, $params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function formatLangLinks($links)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function formatCategoryLinks($links)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function categoriesHtml($categories)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function formatLinks($links)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function formatIWLinks($iw)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function formatHeadItems($headItems)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function formatLimitReportData($limitReportData)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function setIndexedTagNames(&$array, $mapping)
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
            'title' => null,
            'text' => [
                ApiBase::PARAM_TYPE => 'text',
            ],
            'summary' => null,
            'page' => null,
            'pageid' => [
                ApiBase::PARAM_TYPE => 'integer',
            ],
            'redirects' => false,
            'oldid' => [
                ApiBase::PARAM_TYPE => 'integer',
            ],
            'prop' => [
                ApiBase::PARAM_DFLT => 'text|langlinks|categories|links|templates|' .
                    'images|externallinks|sections|revid|displaytitle|iwlinks|properties',
                ApiBase::PARAM_ISMULTI => true,
                ApiBase::PARAM_TYPE => [
                    'text',
                    'langlinks',
                    'categories',
                    'categorieshtml',
                    'links',
                    'templates',
                    'images',
                    'externallinks',
                    'sections',
                    'revid',
                    'displaytitle',
                    'headitems',
                    'headhtml',
                    'modules',
                    'jsconfigvars',
                    'encodedjsconfigvars',
                    'indicators',
                    'iwlinks',
                    'wikitext',
                    'properties',
                    'limitreportdata',
                    'limitreporthtml',
                    'parsetree',
                ],
                ApiBase::PARAM_HELP_MSG_PER_VALUE => [
                    'parsetree' => [ 'apihelp-parse-paramvalue-prop-parsetree', CONTENT_MODEL_WIKITEXT ],
                ],
            ],
            'pst' => false,
            'onlypst' => false,
            'effectivelanglinks' => false,
            'section' => null,
            'sectiontitle' => [
                ApiBase::PARAM_TYPE => 'string',
            ],
            'disablepp' => [
                ApiBase::PARAM_DFLT => false,
                ApiBase::PARAM_DEPRECATED => true,
            ],
            'disablelimitreport' => false,
            'disableeditsection' => false,
            'disabletidy' => false,
            'generatexml' => [
                ApiBase::PARAM_DFLT => false,
                ApiBase::PARAM_HELP_MSG => [
                    'apihelp-parse-param-generatexml', CONTENT_MODEL_WIKITEXT
                ],
                ApiBase::PARAM_DEPRECATED => true,
            ],
            'preview' => false,
            'sectionpreview' => false,
            'disabletoc' => false,
            'contentformat' => [
                ApiBase::PARAM_TYPE => ContentHandler::getAllContentFormats(),
            ],
            'contentmodel' => [
                ApiBase::PARAM_TYPE => ContentHandler::getContentModels(),
            ]
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
