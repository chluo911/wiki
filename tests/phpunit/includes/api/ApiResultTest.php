<?php

/**
 * @covers ApiResult
 * @group API
 */
class ApiResultTest extends MediaWikiTestCase
{

    /**
     * @covers ApiResult
     */
    public function testStaticDataMethods()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ApiResult
     */
    public function testInstanceDataMethods()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ApiResult
     */
    public function testMetadata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ApiResult
     */
    public function testUtilityFunctions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ApiResult
     * @dataProvider provideTransformations
     * @param string $label
     * @param array $input
     * @param array $transforms
     * @param array|Exception $expect
     */
    public function testTransformations($label, $input, $transforms, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideTransformations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Custom transformer for testTransformations
     * @param array &$data
     * @param array &$metadata
     */
    public function customTransform(&$data, &$metadata)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ApiResult
     */
    public function testAddMetadataToResultVars()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testObjectSerialization()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class ApiResultTestStringifiableObject
{
    private $ret;

    public function __construct($ret = 'Ok')
    {
        $this->ret = $ret;
    }

    public function __toString()
    {
        return $this->ret;
    }
}

class ApiResultTestSerializableObject
{
    private $ret;

    public function __construct($ret)
    {
        $this->ret = $ret;
    }

    public function __toString()
    {
        return "Fail";
    }

    public function serializeForApiResult()
    {
        return $this->ret;
    }
}
