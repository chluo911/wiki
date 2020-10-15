<?php

class ImportLogFormatterTest extends LogFormatterTestCase
{

    /**
     * Provide different rows from the logging table to test
     * for backward compatibility.
     * Do not change the existing data, just add a new database row
     */
    public static function provideUploadLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideUploadLogDatabaseRows
     */
    public function testUploadLogDatabaseRows($row, $extra)
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
    public static function provideInterwikiLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideInterwikiLogDatabaseRows
     */
    public function testInterwikiLogDatabaseRows($row, $extra)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
