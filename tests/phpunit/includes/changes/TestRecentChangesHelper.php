<?php
use MediaWiki\Linker\LinkRenderer;
use MediaWiki\MediaWikiServices;

/**
 * Helper for generating test recent changes entries.
 *
 * @author Katie Filbert < aude.wiki@gmail.com >
 */
class TestRecentChangesHelper
{
    public function makeEditRecentChange(
        User $user,
        $titleText,
        $curid,
        $thisid,
        $lastid,
        $timestamp,
        $counter,
        $watchingUsers
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function makeLogRecentChange(
        $logType,
        $logAction,
        User $user,
        $titleText,
        $timestamp,
        $counter,
        $watchingUsers
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function makeDeletedEditRecentChange(
        User $user,
        $titleText,
        $timestamp,
        $curid,
        $thisid,
        $lastid,
        $counter,
        $watchingUsers
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function makeNewBotEditRecentChange(
        User $user,
        $titleText,
        $curid,
        $thisid,
        $lastid,
        $timestamp,
        $counter,
        $watchingUsers
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function makeRecentChange($attribs, $counter, $watchingUsers)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getCacheEntry($recentChange)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function makeCategorizationRecentChange(
        User $user,
        $titleText,
        $curid,
        $thisid,
        $lastid,
        $timestamp
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function getDefaultAttributes($titleText, $timestamp)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getTestContext(User $user)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
