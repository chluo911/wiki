<?php

class MergeLogFormatterTest extends LogFormatterTestCase
{

    /**
     * Provide different rows from the logging table to test
     * for backward compatibility.
     * Do not change the existing data, just add a new database row
     */
    public static function provideMergeLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideMergeLogDatabaseRows
     */
    public function testMergeLogDatabaseRows($row, $extra)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
