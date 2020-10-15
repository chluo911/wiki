<?php

/**
 * @group Database
 * @group Cache
 */
class GenderCacheTest extends MediaWikiLangTestCase
{

    /** @var string[] User key => username */
    private static $nameMap;

    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * test usernames
     *
     * @dataProvider provideUserGenders
     * @covers GenderCache::getGenderOf
     */
    public function testUserName($userKey, $expectedGender)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * genderCache should work with user objects, too
     *
     * @dataProvider provideUserGenders
     * @covers GenderCache::getGenderOf
     */
    public function testUserObjects($userKey, $expectedGender)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideUserGenders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * test strip of subpages to avoid unnecessary queries
     * against the never existing username
     *
     * @dataProvider provideUserGenders
     * @covers GenderCache::getGenderOf
     */
    public function testStripSubpages($userKey, $expectedGender)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
