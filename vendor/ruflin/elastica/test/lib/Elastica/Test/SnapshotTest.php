<?php

namespace Elastica\Test;

use Elastica\Document;
use Elastica\Index;
use Elastica\Snapshot;

class SnapshotTest extends Base
{
    /**
     * @var Snapshot
     */
    protected $_snapshot;

    /**
     * @var Index
     */
    protected $_index;

    protected $_snapshotPath = '/tmp/backups/';

    /**
     * @var Document[]
     */
    protected $_docs;

    protected function setUp()
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
    public function testRegisterRepository()
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
    public function testSnapshotAndRestore()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
