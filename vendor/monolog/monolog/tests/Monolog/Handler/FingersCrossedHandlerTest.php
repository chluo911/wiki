<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\TestCase;
use Monolog\Logger;
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;
use Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy;
use Psr\Log\LogLevel;

class FingersCrossedHandlerTest extends TestCase
{
    /**
     * @covers Monolog\Handler\FingersCrossedHandler::__construct
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     */
    public function testHandleBuffers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     */
    public function testHandleStopsBufferingAfterTrigger()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     * @covers Monolog\Handler\FingersCrossedHandler::reset
     */
    public function testHandleRestartBufferingAfterReset()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     */
    public function testHandleRestartBufferingAfterBeingTriggeredWhenStopBufferingIsDisabled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     */
    public function testHandleBufferLimit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     */
    public function testHandleWithCallback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     * @expectedException RuntimeException
     */
    public function testHandleWithBadCallbackThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::isHandling
     */
    public function testIsHandlingAlways()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::__construct
     * @covers Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy::__construct
     * @covers Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy::isHandlerActivated
     */
    public function testErrorLevelActivationStrategy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::__construct
     * @covers Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy::__construct
     * @covers Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy::isHandlerActivated
     */
    public function testErrorLevelActivationStrategyWithPsrLevel()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy::__construct
     * @covers Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy::isHandlerActivated
     */
    public function testChannelLevelActivationStrategy()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy::__construct
     * @covers Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy::isHandlerActivated
     */
    public function testChannelLevelActivationStrategyWithPsrLevels()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::handle
     */
    public function testHandleUsesProcessors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::close
     */
    public function testPassthruOnClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\FingersCrossedHandler::close
     */
    public function testPsrLevelPassthruOnClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
