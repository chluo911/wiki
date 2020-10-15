<?php

class ProtectLogFormatterTest extends LogFormatterTestCase
{

    /**
     * Provide different rows from the logging table to test
     * for backward compatibility.
     * Do not change the existing data, just add a new database row
     */
    public static function provideProtectLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideProtectLogDatabaseRows
     */
    public function testProtectLogDatabaseRows($row, $extra)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide different rows from the logging table to test
     * for backward compatibility.
     * Do not change the existing data, just add a new database row
     */
    public static function provideModifyLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideModifyLogDatabaseRows
     */
    public function testModifyLogDatabaseRows($row, $extra)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide different rows from the logging table to test
     * for backward compatibility.
     * Do not change the existing data, just add a new database row
     */
    public static function provideUnprotectLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideUnprotectLogDatabaseRows
     */
    public function testUnprotectLogDatabaseRows($row, $extra)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide different rows from the logging table to test
     * for backward compatibility.
     * Do not change the existing data, just add a new database row
     */
    public static function provideMoveProtLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideMoveProtLogDatabaseRows
     */
    public function testMoveProtLogDatabaseRows($row, $extra)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
