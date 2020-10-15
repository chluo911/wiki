<?php

use MediaWiki\MediaWikiServices;

/**
 * @group Database
 */

class LinkerTest extends MediaWikiLangTestCase
{

    /**
     * @dataProvider provideCasesForUserLink
     * @covers Linker::userLink
     */
    public function testUserLink($expected, $userId, $userName, $altUserName = false, $msg = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCasesForUserLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCasesForFormatComment
     * @covers Linker::formatComment
     * @covers Linker::formatAutocomments
     * @covers Linker::formatLinksInComment
     */
    public function testFormatComment(
        $expected,
        $comment,
        $title = false,
        $local = false,
        $wikiId = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideCasesForFormatComment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Linker::formatLinksInComment
     * @dataProvider provideCasesForFormatLinksInComment
     */
    public function testFormatLinksInComment($expected, $input, $wiki)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCasesForFormatLinksInComment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideLinkBeginHook()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MediaWiki\Linker\LinkRenderer::runLegacyBeginHook
     * @dataProvider provideLinkBeginHook
     */
    public function testLinkBeginHook($callback, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideLinkEndHook()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MediaWiki\Linker\LinkRenderer::buildAElement
     * @dataProvider provideLinkEndHook
     */
    public function testLinkEndHook($callback, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Linker::getLinkColour
     */
    public function testGetLinkColour()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
