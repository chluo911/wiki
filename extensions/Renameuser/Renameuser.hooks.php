<?php

class RenameuserHooks
{
    /**
     * Show a log if the user has been renamed and point to the new username.
     * Don't show the log if the $oldUserName exists as a user.
     *
     * @param $article Article
     * @return bool
     */
    public static function onShowMissingArticle($article)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Shows link to Special:Renameuser on Special:Contributions/foo
     *
     * @param $id
     * @param $nt Title
     * @param $tools
     *
     * @return bool
     */
    public static function onContributionsToolLinks($id, $nt, &$tools)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * So users can just type in a username for target and it'll work
     * @param array $types
     * @return bool
     */
    public static function onGetLogTypesOnUser(array &$types)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
