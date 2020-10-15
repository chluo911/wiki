<?php

namespace Elastica\Test\Tool;

use Elastica\Document;
use Elastica\Test\Base;
use Elastica\Tool\CrossIndex;
use Elastica\Type;

class CrossIndexTest extends Base
{
    /**
     * Test default reindex.
     *
     * @group functional
     */
    public function testReindex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test reindex type option.
     *
     * @group functional
     */
    public function testReindexTypeOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test default copy.
     *
     * @group functional
     */
    public function testCopy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Type $type
     * @param int  $docs
     *
     * @return array
     */
    private function _addDocs(Type $type, $docs)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
