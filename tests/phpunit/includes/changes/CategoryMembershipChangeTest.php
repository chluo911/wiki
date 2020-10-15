<?php

/**
 * @covers CategoryMembershipChange
 *
 * @group Database
 *
 * @author Addshore
 */
class CategoryMembershipChangeTest extends MediaWikiLangTestCase
{

    /**
     * @var array|Title[]|User[]
     */
    private static $lastNotifyArgs;

    /**
     * @var int
     */
    private static $notifyCallCounter = 0;

    /**
     * @var RecentChange
     */
    private static $mockRecentChange;

    /**
     * @var Revision
     */
    private static $pageRev = null;

    /**
     * @var User
     */
    private static $revUser = null;

    /**
     * @var string
     */
    private static $pageName = 'CategoryMembershipChangeTestPage';

    public static function newForCategorizationCallback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function newChange(Revision $revision = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testChangeAddedNoRev()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testChangeRemovedNoRev()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testChangeAddedWithRev()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testChangeRemovedWithRev()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
