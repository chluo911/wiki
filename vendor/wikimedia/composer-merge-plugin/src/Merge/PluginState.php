<?php
/**
 * This file is part of the Composer Merge plugin.
 *
 * Copyright (C) 2015 Bryan Davis, Wikimedia Foundation, and contributors
 *
 * This software may be modified and distributed under the terms of the MIT
 * license. See the LICENSE file for details.
 */

namespace Wikimedia\Composer\Merge;

use Composer\Composer;

/**
 * Mutable plugin state
 *
 * @author Bryan Davis <bd808@bd808.com>
 */
class PluginState
{
    /**
     * @var Composer $composer
     */
    protected $composer;

    /**
     * @var array $includes
     */
    protected $includes = array();

    /**
     * @var array $requires
     */
    protected $requires = array();

    /**
     * @var array $duplicateLinks
     */
    protected $duplicateLinks = array();

    /**
     * @var bool $devMode
     */
    protected $devMode = false;

    /**
     * @var bool $recurse
     */
    protected $recurse = true;

    /**
     * @var bool $replace
     */
    protected $replace = false;

    /**
     * Whether to merge the -dev sections.
     * @var bool $mergeDev
     */
    protected $mergeDev = true;

    /**
     * Whether to merge the extra section.
     *
     * By default, the extra section is not merged and there will be many
     * cases where the merge of the extra section is performed too late
     * to be of use to other plugins. When enabled, merging uses one of
     * two strategies - either 'first wins' or 'last wins'. When enabled,
     * 'first wins' is the default behaviour. If Replace mode is activated
     * then 'last wins' is used.
     *
     * @var bool $mergeExtra
     */
    protected $mergeExtra = false;

    /**
     * @var bool $firstInstall
     */
    protected $firstInstall = false;

    /**
     * @var bool $locked
     */
    protected $locked = false;

    /**
     * @var bool $dumpAutoloader
     */
    protected $dumpAutoloader = false;

    /**
     * @var bool $optimizeAutoloader
     */
    protected $optimizeAutoloader = false;

    /**
     * @param Composer $composer
     */
    public function __construct(Composer $composer)
    {
        $this->composer = $composer;
    }

    /**
     * Load plugin settings
     */
    public function loadSettings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get list of filenames and/or glob patterns to include
     *
     * @return array
     */
    public function getIncludes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get list of filenames and/or glob patterns to require
     *
     * @return array
     */
    public function getRequires()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the first install flag
     *
     * @param bool $flag
     */
    public function setFirstInstall($flag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Is this the first time that the plugin has been installed?
     *
     * @return bool
     */
    public function isFirstInstall()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the locked flag
     *
     * @param bool $flag
     */
    public function setLocked($flag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Was a lockfile present when the plugin was installed?
     *
     * @return bool
     */
    public function isLocked()
    {
        return $this->locked;
    }

    /**
     * Should an update be forced?
     *
     * @return true If packages are not locked
     */
    public function forceUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the devMode flag
     *
     * @param bool $flag
     */
    public function setDevMode($flag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Should devMode settings be processed?
     *
     * @return bool
     */
    public function isDevMode()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the dumpAutoloader flag
     *
     * @param bool $flag
     */
    public function setDumpAutoloader($flag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Is the autoloader file supposed to be written out?
     *
     * @return bool
     */
    public function shouldDumpAutoloader()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the optimizeAutoloader flag
     *
     * @param bool $flag
     */
    public function setOptimizeAutoloader($flag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Should the autoloader be optimized?
     *
     * @return bool
     */
    public function shouldOptimizeAutoloader()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add duplicate packages
     *
     * @param string $type Package type
     * @param array $packages
     */
    public function addDuplicateLinks($type, array $packages)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get duplicate packages
     *
     * @param string $type Package type
     * @return array
     */
    public function getDuplicateLinks($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Should includes be recursively processed?
     *
     * @return bool
     */
    public function recurseIncludes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Should duplicate links be replaced in a 'last definition wins' order?
     *
     * @return bool
     */
    public function replaceDuplicateLinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Should the extra section be merged?
     *
     * By default, the extra section is not merged and there will be many
     * cases where the merge of the extra section is performed too late
     * to be of use to other plugins. When enabled, merging uses one of
     * two strategies - either 'first wins' or 'last wins'. When enabled,
     * 'first wins' is the default behaviour. If Replace mode is activated
     * then 'last wins' is used.
     *
     * @return bool
     */
    public function shouldMergeExtra()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
// vim:sw=4:ts=4:sts=4:et:
