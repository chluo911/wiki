<?php
/**
 * Bootstrapping for test image file generation
 *
 * @file
 */

// Start up MediaWiki in command-line mode
require_once __DIR__ . "/../../../../maintenance/Maintenance.php";
require __DIR__ . "/RandomImageGenerator.php";

class GenerateRandomImages extends Maintenance
{
    public function getDbType()
    {
        return Maintenance::DB_NONE;
    }

    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$maintClass = 'GenerateRandomImages';
require RUN_MAINTENANCE_IF_MAIN;
