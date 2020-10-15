<?php

class NukeHooks
{

    /**
     * Shows link to Special:Nuke on Special:Contributions/username if applicable
     *
     * @param $userId Integer
     * @param $userPageTitle Title
     * @param $toolLinks Array
     *
     * @return true
     */
    public static function nukeContributionsLinks($userId, $userPageTitle, &$toolLinks)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
