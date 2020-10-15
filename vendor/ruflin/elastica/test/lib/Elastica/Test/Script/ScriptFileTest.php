<?php

namespace Elastica\Test;

use Elastica\Document;
use Elastica\Exception\ResponseException;
use Elastica\Query;
use Elastica\Script\ScriptFile;
use Elastica\Test\Base as BaseTest;
use Elastica\Type;
use Elastica\Type\Mapping;

class ScriptFileTest extends BaseTest
{
    /**
     * @group functional
     */
    public function testSearch()
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
    public function testConstructor()
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
    public function testCreateString()
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
    public function testCreateScriptFile()
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
    public function testCreateArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     * @dataProvider dataProviderCreateInvalid
     * @expectedException \Elastica\Exception\InvalidException
     */
    public function testCreateInvalid($data)
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
    public function dataProviderCreateInvalid()
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
    public function testSetScriptFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
