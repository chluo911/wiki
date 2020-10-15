<?php

/**
 * Modelled on Sebastian Bergmann's PHPUnit_Extensions_PhptTestCase class.
 *
 * @see https://github.com/sebastianbergmann/phpunit/blob/master/src/Extensions/PhptTestCase.php
 * @author Sam Smith <samsmith@wikimedia.org>
 */
class LessFileCompilationTest extends ResourceLoaderTestCase
{

    /**
     * @var string $file
     */
    protected $file;

    /**
     * @var ResourceLoaderModule The ResourceLoader module that contains
     *   the file
     */
    protected $module;

    /**
     * @param string $file
     * @param ResourceLoaderModule $module The ResourceLoader module that
     *   contains the file
     */
    public function __construct($file, ResourceLoaderModule $module)
    {
        parent::__construct('testLessFileCompilation');

        $this->file = $file;
        $this->module = $module;
    }

    public function testLessFileCompilation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function toString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
