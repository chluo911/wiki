<?php
/**
 * A MemoizedCallable subclass that stores function return values
 * in an instance property rather than APC or APCu.
 */
class ArrayBackedMemoizedCallable extends MemoizedCallable
{
    private $cache = [];

    protected function fetchResult($key, &$success)
    {
        if (array_key_exists($key, $this->cache)) {
            $success = true;
            return $this->cache[$key];
        }
        $success = false;
        return false;
    }

    protected function storeResult($key, $result)
    {
        $this->cache[$key] = $result;
    }
}

/**
 * PHP Unit tests for MemoizedCallable class.
 * @covers MemoizedCallable
 */
class MemoizedCallableTest extends PHPUnit_Framework_TestCase
{

    /**
     * The memoized callable should relate inputs to outputs in the same
     * way as the original underlying callable.
     */
    public function testReturnValuePassedThrough()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Consecutive calls to the memoized callable with the same arguments
     * should result in just one invocation of the underlying callable.
     *
     * @requires function apc_store/apcu_store
     */
    public function testCallableMemoized()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MemoizedCallable::invoke
     */
    public function testInvokeVariadic()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers MemoizedCallable::call
     */
    public function testShortcutMethod()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outlier TTL values should be coerced to range 1 - 86400.
     */
    public function testTTLMaxMin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Closure names should be distinct.
     */
    public function testMemoizedClosure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedExceptionMessage non-scalar argument
     * @expectedException        InvalidArgumentException
     */
    public function testNonScalarArguments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedExceptionMessage must be an instance of callable
     * @expectedException        InvalidArgumentException
     */
    public function testNotCallable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
