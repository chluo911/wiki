<?php

use Composer\Package\Link;
use Composer\Package\Package;
use Composer\Semver\Constraint\Constraint;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ComposerPackageModifier
{
    const MEDIAWIKI_PACKAGE_NAME = 'mediawiki/mediawiki';

    protected $package;
    protected $versionNormalizer;
    protected $versionFetcher;

    public function __construct(
        Package $package,
        ComposerVersionNormalizer $versionNormalizer,
        MediaWikiVersionFetcher $versionFetcher
    ) {
        $this->package = $package;
        $this->versionNormalizer = $versionNormalizer;
        $this->versionFetcher = $versionFetcher;
    }

    public function setProvidesMediaWiki()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function setLinkAsProvides(Link $link)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function newMediaWikiLink()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function getMediaWikiVersionConstraint()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
