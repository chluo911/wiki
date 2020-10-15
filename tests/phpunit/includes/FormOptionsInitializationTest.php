<?php
/**
 * This file host two test case classes for the MediaWiki FormOptions class:
 *  - FormOptionsInitializationTest : tests initialization of the class.
 *  - FormOptionsTest : tests methods an on instance
 *
 * The split let us take advantage of setting up a fixture for the methods
 * tests.
 */

/**
 * Dummy class to makes FormOptions::$options public.
 * Used by FormOptionsInitializationTest which need to verify the $options
 * array is correctly set through the FormOptions::add() function.
 */
class FormOptionsExposed extends FormOptions
{
    public function getOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Test class for FormOptions initialization
 * Ensure the FormOptions::add() does what we want it to do.
 *
 * Generated by PHPUnit on 2011-02-28 at 20:46:27.
 *
 * Copyright © 2011, Antoine Musso
 *
 * @author Antoine Musso
 */
class FormOptionsInitializationTest extends MediaWikiTestCase
{
    /**
     * @var FormOptions
     */
    protected $object;

    /**
     * A new fresh and empty FormOptions object to test initialization
     * with.
     */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FormOptionsExposed::add
     */
    public function testAddStringOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FormOptionsExposed::add
     */
    public function testAddIntegers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}