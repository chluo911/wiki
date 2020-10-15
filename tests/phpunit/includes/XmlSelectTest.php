<?php

/**
 * @group Xml
 */
class XmlSelectTest extends MediaWikiTestCase
{

    /**
     * @var XmlSelect
     */
    protected $select;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XmlSelect::__construct
     */
    public function testConstructWithoutParameters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parameters are $name (false), $id (false), $default (false)
     * @dataProvider provideConstructionParameters
     * @covers XmlSelect::__construct
     */
    public function testConstructParameters($name, $id, $default, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provide parameters for testConstructParameters() which use three
     * parameters:
     *  - $name    (default: false)
     *  - $id      (default: false)
     *  - $default (default: false)
     * Provides a fourth parameters representing the expected HTML output
     */
    public static function provideConstructionParameters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XmlSelect::addOption
     */
    public function testAddOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XmlSelect::addOption
     */
    public function testAddOptionWithDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XmlSelect::addOption
     */
    public function testAddOptionWithFalse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XmlSelect::addOption
     */
    public function testAddOptionWithValueZero()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XmlSelect::setDefault
     */
    public function testSetDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adding default later on should set the correct selection or
     * raise an exception.
     * To handle this, we need to render the options in getHtml()
     * @covers XmlSelect::setDefault
     */
    public function testSetDefaultAfterAddingOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XmlSelect::setAttribute
     * @covers XmlSelect::getAttribute
     */
    public function testGetAttributes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
