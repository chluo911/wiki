<?php
/**
 * Test class for SpecialPreferences class.
 *
 * Copyright © 2013, Antoine Musso
 * Copyright © 2013, Wikimedia Foundation Inc.
 */

/**
 * @group Database
 *
 * @covers SpecialPreferences
 */
class SpecialPreferencesTest extends MediaWikiTestCase
{

    /**
     * Make sure a nickname which is longer than $wgMaxSigChars
     * is not throwing a fatal error.
     *
     * Test specifications by Alexandre "ialex" Emsenhuber.
     * @todo give this test a real name explaining what is being tested here
     */
    public function testBug41337()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
