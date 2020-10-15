<?php

/**
 * @author Addshore
 *
 * @group Database
 *
 * @covers SpecialWatchlist
 */
class SpecialWatchlistTest extends SpecialPageTestBase
{

    /**
     * Returns a new instance of the special page under test.
     *
     * @return SpecialPage
     */
    protected function newSpecialPage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testNotLoggedIn_throwsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUserWithNoWatchedItems_displaysNoWatchlistMessage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
