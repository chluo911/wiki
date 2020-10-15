<?php

/**
 * Try to make sure that extensions register all rights in $wgAvailableRights
 * or via the 'UserGetAllRights' hook.
 *
 * @author Marius Hoch < hoo@online.de >
 */
class AvailableRightsTest extends PHPUnit_Framework_TestCase
{

    /**
     * Returns all rights that should be in $wgAvailableRights + all rights
     * registered via the 'UserGetAllRights' hook + all "core" rights.
     *
     * @return string[]
     */
    private function getAllVisibleRights()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAvailableRights()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
