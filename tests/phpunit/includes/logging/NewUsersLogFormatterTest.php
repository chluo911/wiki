<?php

/**
 * @group Database
 */
class NewUsersLogFormatterTest extends LogFormatterTestCase
{
    protected function setUp()
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
    public static function provideNewUsersLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideNewUsersLogDatabaseRows
     */
    public function testNewUsersLogDatabaseRows($row, $extra)
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
    public static function provideCreateLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCreateLogDatabaseRows
     */
    public function testCreateLogDatabaseRows($row, $extra)
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
    public static function provideCreate2LogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCreate2LogDatabaseRows
     */
    public function testCreate2LogDatabaseRows($row, $extra)
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
    public static function provideByemailLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideByemailLogDatabaseRows
     */
    public function testByemailLogDatabaseRows($row, $extra)
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
    public static function provideAutocreateLogDatabaseRows()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideAutocreateLogDatabaseRows
     */
    public function testAutocreateLogDatabaseRows($row, $extra)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
