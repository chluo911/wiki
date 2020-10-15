<?php

use Composer\Package\Package;
use Composer\Script\Event;

$GLOBALS['IP'] = __DIR__ . '/../../';
require_once __DIR__ . '/../AutoLoader.php';

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ComposerHookHandler
{
    public static function onPreUpdate(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function onPreInstall(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private static function handleChangeEvent(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
