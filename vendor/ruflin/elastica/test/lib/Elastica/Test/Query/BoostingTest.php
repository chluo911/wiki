<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Query\Boosting;
use Elastica\Query\Term;
use Elastica\Test\Base as BaseTest;

class BoostingTest extends BaseTest
{
    /**
     * @var array
     */
    protected $sampleData = array(
        array('name' => 'Vital Lama', 'price' => 5.2),
        array('name' => 'Vital Match', 'price' => 2.1),
        array('name' => 'Mercury Vital', 'price' => 7.5),
        array('name' => 'Fist Mercury', 'price' => 3.8),
        array('name' => 'Lama Vital 2nd', 'price' => 3.2),
    );

    protected function _getTestIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     */
    public function testToArray()
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
    public function testNegativeBoost()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
