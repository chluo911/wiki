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

class StreamHandlerTest extends TestCase
{
    /**
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWrite()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\StreamHandler::close
     */
    public function testClose()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteCreatesTheStreamResource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteLocking()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException LogicException
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteMissingResource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function invalidArgumentProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider invalidArgumentProvider
     * @expectedException InvalidArgumentException
     * @covers Monolog\Handler\StreamHandler::__construct
     */
    public function testWriteInvalidArgument($invalidArgument)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UnexpectedValueException
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteInvalidResource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UnexpectedValueException
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteNonExistingResource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteNonExistingPath()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteNonExistingFileResource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessageRegExp /There is no existing directory at/
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteNonExistingAndNotCreatablePath()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException Exception
     * @expectedExceptionMessageRegExp /There is no existing directory at/
     * @covers Monolog\Handler\StreamHandler::__construct
     * @covers Monolog\Handler\StreamHandler::write
     */
    public function testWriteNonExistingAndNotCreatableFileResource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
