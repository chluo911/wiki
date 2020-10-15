<?php

/**
 * @group Database
 */
class MovePageTest extends MediaWikiTestCase
{

    /**
     * @dataProvider provideIsValidMove
     * @covers MovePage::isValidMove
     * @covers MovePage::isValidFileMove
     */
    public function testIsValidMove($old, $new, $error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This should be kept in sync with TitleTest::provideTestIsValidMoveOperation
     */
    public static function provideIsValidMove()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Integration test to catch regressions like T74870. Taken and modified
     * from SemanticMediaWiki
     */
    public function testTitleMoveCompleteIntegrationTest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
