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

use Composer\Package\BasePackage;
use Composer\Package\Version\VersionParser;

/**
 * Adapted from Composer's RootPackageLoader::extractStabilityFlags
 * @author Bryan Davis <bd808@bd808.com>
 */
class StabilityFlags
{

    /**
     * @var array Current package name => stability mappings
     */
    protected $stabilityFlags;

    /**
     * @var int Current default minimum stability
     */
    protected $minimumStability;

    /**
     * @var string Regex to extract an explict stability flag (eg '@dev')
     */
    protected $explicitStabilityRe;


    /**
     * @param array $stabilityFlags Current package name => stability mappings
     * @param int $minimumStability Current default minimum stability
     */
    public function __construct(
        array $stabilityFlags = array(),
        $minimumStability = BasePackage::STABILITY_STABLE
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the stability value for a given string.
     *
     * @param string $name Stability name
     * @return int Stability value
     */
    protected function getStabilityInt($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extract and merge stability flags from the given collection of
     * requires with another collection of stability flags.
     *
     * @param array $requires New package name => link mappings
     * @return array Unified package name => stability mappings
     */
    public function extractAll(array $requires)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    /**
     * Extract the most unstable explicit stability (eg '@dev') from a version
     * specification.
     *
     * @param string $version
     * @return int|null Stability or null if no explict stability found
     */
    protected function getExplicitStability($version)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    /**
     * Split a version specification into a list of version constraints.
     *
     * @param string $version
     * @return array
     */
    protected function splitConstraints($version)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    /**
     * Get the stability of a version
     *
     * @param string $version
     * @return int|null Stability or null if STABLE or less than minimum
     */
    protected function getParsedStability($version)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    /**
     * Get the current stability of a given package.
     *
     * @param string $name
     * @return int|null Stability of null if not set
     */
    protected function getCurrentStability($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
// vim:sw=4:ts=4:sts=4:et:
