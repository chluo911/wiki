<?php

/**
 * @author Addshore
 *
 * @group Diff
 */
class DiffTest extends MediaWikiTestCase
{

    /**
     * @covers Diff::getEdits
     */
    public function testGetEdits()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
