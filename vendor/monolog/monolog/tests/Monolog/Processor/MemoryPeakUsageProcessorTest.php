<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Processor;

use Monolog\TestCase;

class MemoryPeakUsageProcessorTest extends TestCase
{
    /**
     * @covers Monolog\Processor\MemoryPeakUsageProcessor::__invoke
     * @covers Monolog\Processor\MemoryProcessor::formatBytes
     */
    public function testProcessor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Monolog\Processor\MemoryPeakUsageProcessor::__invoke
     * @covers Monolog\Processor\MemoryProcessor::formatBytes
     */
    public function testProcessorWithoutFormatting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
