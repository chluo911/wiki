<?php
/**
 * Tests for log dumps of BackupDumper
 *
 * Some of these tests use the old constuctor for TextPassDumper
 * and the dump() function, while others use the new loadWithArgv( $args )
 * function and execute(). This is to ensure both the old and new methods
 * work properly.
 *
 * @group Database
 * @group Dump
 * @covers BackupDumper
 */
class BackupDumperLoggerTest extends DumpTestCase
{

    // We'll add several log entries and users for this test. The following
    // variables hold the corresponding ids.
    private $userId1;
    private $userId2;
    private $logId1;
    private $logId2;
    private $logId3;

    /**
     * adds a log entry to the database.
     *
     * @param string $type Type of the log entry
     * @param string $subtype Subtype of the log entry
     * @param User $user User that performs the logged operation
     * @param int $ns Number of the namespace for the entry's target's title
     * @param string $title Title of the entry's target
     * @param string $comment Comment of the log entry
     * @param array $parameters (optional) accompanying data that is attached to the entry
     *
     * @return int Id of the added log entry
     */
    private function addLogEntry(
        $type,
        $subtype,
        User $user,
        $ns,
        $title,
        $comment = null,
        $parameters = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addDBData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * asserts that the xml reader is at the beginning of a log entry and skips over
     * it while analyzing it.
     *
     * @param int $id Id of the log entry
     * @param string $user_name User name of the log entry's performer
     * @param int $user_id User id of the log entry 's performer
     * @param string|null $comment Comment of the log entry. If null, the comment text is ignored.
     * @param string $type Type of the log entry
     * @param string $subtype Subtype of the log entry
     * @param string $title Title of the log entry's target
     * @param array $parameters (optional) unserialized data accompanying the log entry
     */
    private function assertLogItem(
        $id,
        $user_name,
        $user_id,
        $comment,
        $type,
        $subtype,
        $title,
        $parameters = []
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPlain()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testXmlDumpsBackupUseCaseLogging()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
