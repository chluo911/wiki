<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process;

use Symfony\Component\Process\Exception\InvalidArgumentException;
use Symfony\Component\Process\Exception\LogicException;

/**
 * Process builder.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class ProcessBuilder
{
    private $arguments;
    private $cwd;
    private $env = array();
    private $input;
    private $timeout = 60;
    private $options = array();
    private $inheritEnv = true;
    private $prefix = array();
    private $outputDisabled = false;

    /**
     * Constructor.
     *
     * @param string[] $arguments An array of arguments
     */
    public function __construct(array $arguments = array())
    {
        $this->arguments = $arguments;
    }

    /**
     * Creates a process builder instance.
     *
     * @param string[] $arguments An array of arguments
     *
     * @return ProcessBuilder
     */
    public static function create(array $arguments = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds an unescaped argument to the command string.
     *
     * @param string $argument A command argument
     *
     * @return ProcessBuilder
     */
    public function add($argument)
    {
        $this->arguments[] = $argument;

        return $this;
    }

    /**
     * Adds a prefix to the command string.
     *
     * The prefix is preserved when resetting arguments.
     *
     * @param string|array $prefix A command prefix or an array of command prefixes
     *
     * @return ProcessBuilder
     */
    public function setPrefix($prefix)
    {
        $this->prefix = is_array($prefix) ? $prefix : array($prefix);

        return $this;
    }

    /**
     * Sets the arguments of the process.
     *
     * Arguments must not be escaped.
     * Previous arguments are removed.
     *
     * @param string[] $arguments
     *
     * @return ProcessBuilder
     */
    public function setArguments(array $arguments)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the working directory.
     *
     * @param null|string $cwd The working directory
     *
     * @return ProcessBuilder
     */
    public function setWorkingDirectory($cwd)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets whether environment variables will be inherited or not.
     *
     * @param bool $inheritEnv
     *
     * @return ProcessBuilder
     */
    public function inheritEnvironmentVariables($inheritEnv = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets an environment variable.
     *
     * Setting a variable overrides its previous value. Use `null` to unset a
     * defined environment variable.
     *
     * @param string      $name  The variable name
     * @param null|string $value The variable value
     *
     * @return ProcessBuilder
     */
    public function setEnv($name, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a set of environment variables.
     *
     * Already existing environment variables with the same name will be
     * overridden by the new values passed to this method. Pass `null` to unset
     * a variable.
     *
     * @param array $variables The variables
     *
     * @return ProcessBuilder
     */
    public function addEnvironmentVariables(array $variables)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the input of the process.
     *
     * @param mixed $input The input as a string
     *
     * @return ProcessBuilder
     *
     * @throws InvalidArgumentException In case the argument is invalid
     */
    public function setInput($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the process timeout.
     *
     * To disable the timeout, set this value to null.
     *
     * @param float|null $timeout
     *
     * @return ProcessBuilder
     *
     * @throws InvalidArgumentException
     */
    public function setTimeout($timeout)
    {
        if (null === $timeout) {
            $this->timeout = null;

            return $this;
        }

        $timeout = (float) $timeout;

        if ($timeout < 0) {
            throw new InvalidArgumentException('The timeout value must be a valid positive integer or float number.');
        }

        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Adds a proc_open option.
     *
     * @param string $name  The option name
     * @param string $value The option value
     *
     * @return ProcessBuilder
     */
    public function setOption($name, $value)
    {
        $this->options[$name] = $value;

        return $this;
    }

    /**
     * Disables fetching output and error output from the underlying process.
     *
     * @return ProcessBuilder
     */
    public function disableOutput()
    {
        $this->outputDisabled = true;

        return $this;
    }

    /**
     * Enables fetching output and error output from the underlying process.
     *
     * @return ProcessBuilder
     */
    public function enableOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a Process instance and returns it.
     *
     * @return Process
     *
     * @throws LogicException In case no arguments have been provided
     */
    public function getProcess()
    {
        if (0 === count($this->prefix) && 0 === count($this->arguments)) {
            throw new LogicException('You must add() command arguments before calling getProcess().');
        }

        $options = $this->options;

        $arguments = array_merge($this->prefix, $this->arguments);
        $script = implode(' ', array_map(array(__NAMESPACE__.'\\ProcessUtils', 'escapeArgument'), $arguments));

        if ($this->inheritEnv) {
            $env = array_replace($_ENV, $_SERVER, $this->env);
        } else {
            $env = $this->env;
        }

        $process = new Process($script, $this->cwd, $env, $this->input, $this->timeout, $options);

        if ($this->outputDisabled) {
            $process->disableOutput();
        }

        return $process;
    }
}
