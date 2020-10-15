<?php

class TestSample extends MediaWikiLangTestCase
{

    /**
     * Anything that needs to happen before your tests should go here.
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
     * Anything cleanup you need to do should go here.
     */
    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Name tests so that PHPUnit can turn them into sentences when
     * they run.  While MediaWiki isn't strictly an Agile Programming
     * project, you are encouraged to use the naming described under
     * "Agile Documentation" at
     * http://www.phpunit.de/manual/3.4/en/other-uses-for-tests.html
     */
    public function testTitleObjectStringConversion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If you want to run a the same test with a variety of data, use a data provider.
     * see: http://www.phpunit.de/manual/3.4/en/writing-tests-for-phpunit.html
     */
    public static function provideTitles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // @codingStandardsIgnoreStart Generic.Files.LineLength
    /**
     * @dataProvider provideTitles
     * See http://phpunit.de/manual/3.7/en/appendixes.annotations.html#appendixes.annotations.dataProvider
     */
    // @codingStandardsIgnoreEnd
    public function testCreateBasicListOfTitles($titleName, $ns, $text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSetUpMainPageTitleForNextTest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Instead of putting a bunch of tests in a single test method,
     * you should put only one or two tests in each test method.  This
     * way, the test method names can remain descriptive.
     *
     * If you want to make tests depend on data created in another
     * method, you can create dependencies feed whatever you return
     * from the dependant method (e.g. testInitialCreation in this
     * example) as arguments to the next method (e.g. $title in
     * testTitleDepends is whatever testInitialCreatiion returned.)
     */

    /**
     * @depends testSetUpMainPageTitleForNextTest
     * See http://phpunit.de/manual/3.7/en/appendixes.annotations.html#appendixes.annotations.depends
     */
    public function testCheckMainPageTitleIsConsideredLocal($title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // @codingStandardsIgnoreStart Generic.Files.LineLength
    /**
     * @expectedException InvalidArgumentException
     * See http://phpunit.de/manual/3.7/en/appendixes.annotations.html#appendixes.annotations.expectedException
     */
    // @codingStandardsIgnoreEnd
    public function testTitleObjectFromObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
