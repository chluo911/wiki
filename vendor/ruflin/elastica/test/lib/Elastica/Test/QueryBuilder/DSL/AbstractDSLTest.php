<?php

namespace Elastica\Test\QueryBuilder\DSL;

use Elastica\Exception\NotImplementedException;
use Elastica\QueryBuilder\DSL;
use Elastica\Test\Base as BaseTest;

abstract class AbstractDSLTest extends BaseTest
{
    /**
     * @param DSL    $dsl
     * @param string $methodName
     * @param string $className
     * @param array  $arguments
     */
    protected function _assertImplemented(DSL $dsl, $methodName, $className, $arguments)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param DSL    $dsl
     * @param string $name
     */
    protected function _assertNotImplemented(DSL $dsl, $methodName, $arguments)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \ReflectionParameter[] $left
     * @param \ReflectionParameter[] $right
     */
    protected function _assertParametersEquals($left, $right)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \ReflectionParameter $param
     *
     * @return string|null
     */
    protected function _getDefaultValue(\ReflectionParameter $param)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \ReflectionParameter $param
     *
     * @return string|null
     */
    protected function _getHintName(\ReflectionParameter $param)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
