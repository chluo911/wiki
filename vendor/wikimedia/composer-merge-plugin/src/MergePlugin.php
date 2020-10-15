<?php
/**
 * This file is part of the Composer Merge plugin.
 *
 * Copyright (C) 2015 Bryan Davis, Wikimedia Foundation, and contributors
 *
 * This software may be modified and distributed under the terms of the MIT
 * license. See the LICENSE file for details.
 */

namespace Wikimedia\Composer;

use Wikimedia\Composer\Merge\ExtraPackage;
use Wikimedia\Composer\Merge\MissingFileException;
use Wikimedia\Composer\Merge\PluginState;

use Composer\Composer;
use Composer\DependencyResolver\Operation\InstallOperation;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Factory;
use Composer\Installer;
use Composer\Installer\InstallerEvent;
use Composer\Installer\InstallerEvents;
use Composer\Installer\PackageEvent;
use Composer\Installer\PackageEvents;
use Composer\IO\IOInterface;
use Composer\Package\RootPackageInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;

/**
 * Composer plugin that allows merging multiple composer.json files.
 *
 * When installed, this plugin will look for a "merge-plugin" key in the
 * composer configuration's "extra" section. The value for this key is
 * a set of options configuring the plugin.
 *
 * An "include" setting is required. The value of this setting can be either
 * a single value or an array of values. Each value is treated as a glob()
 * pattern identifying additional composer.json style configuration files to
 * merge into the configuration for the current compser execution.
 *
 * The "autoload", "autoload-dev", "conflict", "provide", "replace",
 * "repositories", "require", "require-dev", and "suggest" sections of the
 * found configuration files will be merged into the root package
 * configuration as though they were directly included in the top-level
 * composer.json file.
 *
 * If included files specify conflicting package versions for "require" or
 * "require-dev", the normal Composer dependency solver process will be used
 * to attempt to resolve the conflict. Specifying the 'replace' key as true will
 * change this default behaviour so that the last-defined version of a package
 * will win, allowing for force-overrides of package defines.
 *
 * By default the "extra" section is not merged. This can be enabled by
 * setitng the 'merge-extra' key to true. In normal mode, when the same key is
 * found in both the original and the imported extra section, the version in
 * the original config is used and the imported version is skipped. If
 * 'replace' mode is active, this behaviour changes so the imported version of
 * the key is used, replacing the version in the original config.
 *
 *
 * @code
 * {
 *     "require": {
 *         "wikimedia/composer-merge-plugin": "dev-master"
 *     },
 *     "extra": {
 *         "merge-plugin": {
 *             "include": [
 *                 "composer.local.json"
 *             ]
 *         }
 *     }
 * }
 * @endcode
 *
 * @author Bryan Davis <bd808@bd808.com>
 */
class MergePlugin implements PluginInterface, EventSubscriberInterface
{

    /**
     * Offical package name
     */
    const PACKAGE_NAME = 'wikimedia/composer-merge-plugin';

    /**
     * @var Composer $composer
     */
    protected $composer;

    /**
     * @var PluginState $state
     */
    protected $state;

    /**
     * @var Logger $logger
     */
    protected $logger;

    /**
     * Files that have already been processed
     *
     * @var string[] $loadedFiles
     */
    protected $loadedFiles = array();

    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handle an event callback for an install, update or dump command by
     * checking for "merge-plugin" in the "extra" data and merging package
     * contents if found.
     *
     * @param Event $event
     */
    public function onInstallUpdateOrDump(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Find configuration files matching the configured glob patterns and
     * merge their contents with the master package.
     *
     * @param array $patterns List of files/glob patterns
     * @param bool $required Are the patterns required to match files?
     * @throws MissingFileException when required and a pattern returns no
     *      results
     */
    protected function mergeFiles(array $patterns, $required = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Read a JSON file and merge its contents
     *
     * @param RootPackageInterface $root
     * @param string $path
     */
    protected function mergeFile(RootPackageInterface $root, $path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handle an event callback for pre-dependency solving phase of an install
     * or update by adding any duplicate package dependencies found during
     * initial merge processing to the request that will be processed by the
     * dependency solver.
     *
     * @param InstallerEvent $event
     */
    public function onDependencySolve(InstallerEvent $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handle an event callback following installation of a new package by
     * checking to see if the package that was installed was our plugin.
     *
     * @param PackageEvent $event
     */
    public function onPostPackageInstall(PackageEvent $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handle an event callback following an install or update command. If our
     * plugin was installed during the run then trigger an update command to
     * process any merge-patterns in the current config.
     *
     * @param Event $event
     */
    public function onPostInstallOrUpdate(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
// vim:sw=4:ts=4:sts=4:et:
