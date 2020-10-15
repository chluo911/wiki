<?php

/**
 * @since 1.28
 */
class TestUserRegistry
{

    /** @var TestUser[] (group key => TestUser) */
    private static $testUsers = [];

    /** @var int Count of users that have been generated */
    private static $counter = 0;

    /** @var int Random int, included in IDs */
    private static $randInt;

    public static function getNextId()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a TestUser object that the caller may modify.
     *
     * @since 1.28
     *
     * @param string $testName Caller's __CLASS__. Used to generate the
     *  user's username.
     * @param string[] $groups Groups the test user should be added to.
     * @return TestUser
     */
    public static function getMutableTestUser($testName, $groups = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a TestUser object that the caller may not modify.
     *
     * Whenever possible, unit tests should use immutable users, because
     * immutable users can be reused in multiple tests, which helps keep
     * the unit tests fast.
     *
     * @since 1.28
     *
     * @param string[] $groups Groups the test user should be added to.
     * @return TestUser
     */
    public static function getImmutableTestUser($groups = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clear the registry.
     *
     * TestUsers created by this class will not be deleted, but any handles
     * to existing immutable TestUsers will be deleted, ensuring these users
     * are not reused. We don't reset the counter or random string by design.
     *
     * @since 1.28
     *
     * @param string[] $groups Groups the test user should be added to.
     * @return TestUser
     */
    public static function clear()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
