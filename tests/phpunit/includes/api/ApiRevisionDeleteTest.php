<?php

/**
 * Tests for action=revisiondelete
 * @covers APIRevisionDelete
 * @group API
 * @group medium
 * @group Database
 */
class ApiRevisionDeleteTest extends ApiTestCase
{
    public static $page = 'Help:ApiRevDel_test';
    public $revs = [];

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHidingRevisions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUnhidingOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
