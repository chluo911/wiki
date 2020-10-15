<?php

namespace Elastica\Test\Query;

use Elastica\Document;
use Elastica\Index;
use Elastica\Query;
use Elastica\Query\MultiMatch;
use Elastica\Test\Base as BaseTest;
use Elastica\Type;
use Elastica\Type\Mapping;

class MultiMatchTest extends BaseTest
{
    private $index;
    private $multiMatch;

    private static $data = array(
        array('id' => 1, 'name' => 'Rodolfo', 'last_name' => 'Moraes',   'full_name' => 'Rodolfo Moraes'),
        array('id' => 2, 'name' => 'Tristan', 'last_name' => 'Maindron', 'full_name' => 'Tristan Maindron'),
        array('id' => 3, 'name' => 'Monique', 'last_name' => 'Maindron', 'full_name' => 'Monique Maindron'),
        array('id' => 4, 'name' => 'John',    'last_name' => 'not Doe',  'full_name' => 'John not Doe'),
    );

    /**
     * @group functional
     */
    public function testMinimumShouldMatch()
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
    public function testAndOperator()
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
    public function testType()
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
    public function testFuzzy()
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
    public function testFuzzyWithOptions1()
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
    public function testFuzzyWithOptions2()
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
    public function testZeroTerm()
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
    public function testBaseMultiMatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Executes the query with the current multimatch.
     */
    private function _getResults(MultiMatch $multiMatch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Builds an index for testing.
     */
    private function _generateIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
