<?php

namespace Elastica\Test\Cluster;

use Elastica\Cluster\Settings;
use Elastica\Document;
use Elastica\Exception\ResponseException;
use Elastica\Test\Base as BaseTest;

class SettingsTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testSetTransient()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group functional
     */
    public function testSetPersistent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group functional
     */
    public function testSetReadOnly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
