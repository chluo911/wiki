<?php

/**
 * @group Skin
 */
class SideBarTest extends MediaWikiLangTestCase
{

    /**
     * A skin template, reinitialized before each test
     * @var SkinTemplate
     */
    private $skin;
    /** Local cache for sidebar messages */
    private $messages;

    /** Build $this->messages array */
    private function initMessagesHref()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Internal helper to test the sidebar
     * @param array $expected
     * @param string $text
     * @param string $message (Default: '')
     * @todo this assert method to should be converted to a test using a dataprovider..
     */
    private function assertSideBar($expected, $text, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers SkinTemplate::addToSidebarPlain
     */
    public function testSidebarWithOnlyTwoTitles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers SkinTemplate::addToSidebarPlain
     */
    public function testExpandMessages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers SkinTemplate::addToSidebarPlain
     */
    public function testExternalUrlsRequireADescription()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * bug 33321 - Make sure there's a | after transforming.
     * @group Database
     * @covers SkinTemplate::addToSidebarPlain
     */
    public function testTrickyPipe()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    #### Attributes for external links ##########################
    private function getAttribs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Simple test to verify our helper assertAttribs() is functional
     */
    public function testTestAttributesAssertionHelper()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test $wgNoFollowLinks in sidebar
     */
    public function testRespectWgnofollowlinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test $wgExternaLinkTarget in sidebar
     * @dataProvider dataRespectExternallinktarget
     */
    public function testRespectExternallinktarget($externalLinkTarget)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function dataRespectExternallinktarget()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
