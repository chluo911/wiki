<?php
require_once __DIR__ . '/Maintenance.php';

/**
 * Fixes all rows affected by https://bugzilla.wikimedia.org/show_bug.cgi?id=37714
 */
class TidyUpBug37714 extends Maintenance
{
    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$maintClass = 'TidyUpBug37714';
require_once RUN_MAINTENANCE_IF_MAIN;
