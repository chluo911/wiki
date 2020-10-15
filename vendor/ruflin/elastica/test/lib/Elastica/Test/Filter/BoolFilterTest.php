<?php

namespace Elastica\Test\Filter;

use Elastica\Document;
use Elastica\Filter\BoolFilter;
use Elastica\Filter\Ids;
use Elastica\Filter\Term;
use Elastica\Filter\Terms;
use Elastica\Query;
use Elastica\Test\DeprecatedClassBase as BaseTest;

class BoolFilterTest extends BaseTest
{
    /**
     * @group unit
     */
    public function testDeprecated()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    public function getTestToArrayData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @dataProvider getTestToArrayData()
     *
     * @param bool  $bool
     * @param array $expectedArray
     */
    public function testToArray(BoolFilter $bool, $expectedArray)
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
    public function testBoolFilter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @expectedException \Elastica\Exception\InvalidException
     */
    public function testAddMustInvalidException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @expectedException \Elastica\Exception\InvalidException
     */
    public function testAddMustNotInvalidException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @expectedException \Elastica\Exception\InvalidException
     */
    public function testAddShouldInvalidException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Small unit test to check if also the old object name works.
     *
     * @group unit
     * @expectedException \Elastica\Exception\InvalidException
     */
    public function testOldObject()
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
    public function testOldObjectDeprecated()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
