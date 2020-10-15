<?php

/**
 * @group Database
 *
 * @covers Title::getUserPermissionsErrors
 * @covers Title::getUserPermissionsErrorsInternal
 */
class TitlePermissionTest extends MediaWikiLangTestCase
{

    /**
     * @var string
     */
    protected $userName;
    protected $altUserName;

    /**
     * @var Title
     */
    protected $title;

    /**
     * @var User
     */
    protected $user;
    protected $anonUser;
    protected $userUser;
    protected $altUser;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUserPerm($perm)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setTitle($ns, $title = "Main_Page")
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUser($userName = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @todo This test method should be split up into separate test methods and
     * data providers
     */
    public function testQuickPermissions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function runGroupPermissions($action, $result, $result2 = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @todo This test method should be split up into separate test methods and
     * data providers
     */
    public function testSpecialsAndNSPermissions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @todo This test method should be split up into separate test methods and
     * data providers
     */
    public function testCssAndJavascriptPermissions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function runCSSandJSPermissions($result0, $result1, $result2, $result3, $result4)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @todo This test method should be split up into separate test methods and
     * data providers
     */
    public function testPageRestrictions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCascadingSourcesRestrictions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @todo This test method should be split up into separate test methods and
     * data providers
     */
    public function testActionPermissions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUserBlock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
