<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
/**
 * PHP Version 5
 *
 * Copyright (c) 1997-2004 The PHP Group
 *
 * This source file is subject to version 3.0 of the PHP license,
 * that is bundled with this package in the file LICENSE, and is
 * available through the world-wide-web at the following url:
 * http://www.php.net/license/3_0.txt.
 * If you did not receive a copy of the PHP license and are unable to
 * obtain it through the world-wide-web, please send a note to
 * license@php.net so we can mail you a copy immediately.
 *
 * @category Console
 * @package  Console_Getopt
 * @author   Andrei Zmievski <andrei@php.net>
 * @license  http://www.php.net/license/3_0.txt PHP 3.0
 * @version  CVS: $Id$
 * @link     http://pear.php.net/package/Console_Getopt
 */

require_once 'PEAR.php';

/**
 * Command-line options parsing class.
 *
 * @category Console
 * @package  Console_Getopt
 * @author   Andrei Zmievski <andrei@php.net>
 * @license  http://www.php.net/license/3_0.txt PHP 3.0
 * @link     http://pear.php.net/package/Console_Getopt
 */
class Console_Getopt
{

    /**
     * Parses the command-line options.
     *
     * The first parameter to this function should be the list of command-line
     * arguments without the leading reference to the running program.
     *
     * The second parameter is a string of allowed short options. Each of the
     * option letters can be followed by a colon ':' to specify that the option
     * requires an argument, or a double colon '::' to specify that the option
     * takes an optional argument.
     *
     * The third argument is an optional array of allowed long options. The
     * leading '--' should not be included in the option name. Options that
     * require an argument should be followed by '=', and options that take an
     * option argument should be followed by '=='.
     *
     * The return value is an array of two elements: the list of parsed
     * options and the list of non-option command-line arguments. Each entry in
     * the list of parsed options is a pair of elements - the first one
     * specifies the option, and the second one specifies the option argument,
     * if there was one.
     *
     * Long and short options can be mixed.
     *
     * Most of the semantics of this function are based on GNU getopt_long().
     *
     * @param array  $args          an array of command-line arguments
     * @param string $short_options specifies the list of allowed short options
     * @param array  $long_options  specifies the list of allowed long options
     * @param boolean $skip_unknown suppresses Console_Getopt: unrecognized option
     *
     * @return array two-element array containing the list of parsed options and
     * the non-option arguments
     */
    public static function getopt2($args, $short_options, $long_options = null, $skip_unknown = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This function expects $args to start with the script name (POSIX-style).
     * Preserved for backwards compatibility.
     *
     * @param array  $args          an array of command-line arguments
     * @param string $short_options specifies the list of allowed short options
     * @param array  $long_options  specifies the list of allowed long options
     *
     * @see getopt2()
     * @return array two-element array containing the list of parsed options and
     * the non-option arguments
     */
    public static function getopt($args, $short_options, $long_options = null, $skip_unknown = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The actual implementation of the argument parsing code.
     *
     * @param int    $version       Version to use
     * @param array  $args          an array of command-line arguments
     * @param string $short_options specifies the list of allowed short options
     * @param array  $long_options  specifies the list of allowed long options
     * @param boolean $skip_unknown suppresses Console_Getopt: unrecognized option
     *
     * @return array
     */
    public static function doGetopt($version, $args, $short_options, $long_options = null, $skip_unknown = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse short option
     *
     * @param string     $arg           Argument
     * @param string[]   $short_options Available short options
     * @param string[][] &$opts
     * @param string[]   &$args
     * @param boolean    $skip_unknown suppresses Console_Getopt: unrecognized option
     *
     * @return void
     */
    protected static function _parseShortOption($arg, $short_options, &$opts, &$args, $skip_unknown)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if an argument is a short option
     *
     * @param string $arg Argument to check
     *
     * @return bool
     */
    protected static function _isShortOpt($arg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if an argument is a long option
     *
     * @param string $arg Argument to check
     *
     * @return bool
     */
    protected static function _isLongOpt($arg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse long option
     *
     * @param string     $arg          Argument
     * @param string[]   $long_options Available long options
     * @param string[][] &$opts
     * @param string[]   &$args
     *
     * @return void|PEAR_Error
     */
    protected static function _parseLongOption($arg, $long_options, &$opts, &$args, $skip_unknown)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Safely read the $argv PHP array across different PHP configurations.
     * Will take care on register_globals and register_argc_argv ini directives
     *
     * @return mixed the $argv PHP array or PEAR error if not registered
     */
    public static function readPHPArgv()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

}
