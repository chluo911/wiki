<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process\Exception;

use Symfony\Component\Process\Process;

/**
 * Exception for failed processes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ProcessFailedException extends RuntimeException
{
    private $process;

    public function __construct(Process $process)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getProcess()
    {
        return $this->process;
    }
}
