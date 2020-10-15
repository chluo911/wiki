<?php

/**
 * Copyright © 2007 Daniel Kinzler
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
use WrappedString\WrappedString;

class GadgetHooks
{
    /**
     * PageContentSaveComplete hook handler.
     *
     * @param $article Article
     * @param $user User
     * @param $content Content New page content
     * @return bool
     */
    public static function onPageContentSaveComplete($article, $user, $content)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * UserGetDefaultOptions hook handler
     * @param $defaultOptions Array of default preference keys and values
     * @return bool
     */
    public static function userGetDefaultOptions(&$defaultOptions)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * GetPreferences hook handler.
     * @param $user User
     * @param $preferences Array: Preference descriptions
     * @return bool
     */
    public static function getPreferences($user, &$preferences)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * ResourceLoaderRegisterModules hook handler.
     * @param $resourceLoader ResourceLoader
     * @return bool
     */
    public static function registerModules(&$resourceLoader)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * BeforePageDisplay hook handler.
     * @param $out OutputPage
     * @return bool
     */
    public static function beforePageDisplay($out)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private static function makeLegacyWarning($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private static function makeTypelessWarning($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Valid gadget definition page after content is modified
     *
     * @param IContextSource $context
     * @param Content $content
     * @param Status $status
     * @param string $summary
     * @throws Exception
     * @return bool
     */
    public static function onEditFilterMergedContent($context, $content, $status, $summary)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * After a new page is created in the Gadget definition namespace,
     * invalidate the list of gadget ids
     *
     * @param WikiPage $page
     */
    public static function onPageContentInsertComplete(WikiPage $page)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Mark the Title as having a content model of javascript or css for pages
     * in the Gadget namespace based on their file extension
     *
     * @param Title $title
     * @param string $model
     * @return bool
     */
    public static function onContentHandlerDefaultModelFor(Title $title, &$model)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the CodeEditor language for Gadget definition pages. It already
     * knows the language for Gadget: namespace pages.
     *
     * @param Title $title
     * @param string $lang
     * @return bool
     */
    public static function onCodeEditorGetPageLanguage(Title $title, &$lang)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add the GadgetUsage special page to the list of QueryPages.
     * @param array &$queryPages
     * @return bool
     */
    public static function onwgQueryPages(&$queryPages)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
