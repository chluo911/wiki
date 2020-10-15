<?php

namespace Elastica\Test\QueryBuilder;

use Elastica\QueryBuilder\DSL;
use Elastica\QueryBuilder\Version;
use Elastica\Test\Base as BaseTest;

class VersionTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testVersions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function assertVersions(Version $version, array $dsl)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
