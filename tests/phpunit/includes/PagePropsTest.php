<?php

/**
 * @group Database
 *	^--- tell jenkins this test needs the database
 *
 * @group medium
 *	^--- tell phpunit that these test cases may take longer than 2 seconds.
 */
class TestPageProps extends MediaWikiLangTestCase
{

    /**
     * @var Title $title1
     */
    private $title1;

    /**
     * @var Title $title2
     */
    private $title2;

    /**
     * @var array $the_properties
     */
    private $the_properties;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test getting a single property from a single page. The property was
     * set in setUp().
     */
    public function testGetSingleProperty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test getting a single property from multiple pages. The property was
     * set in setUp().
     */
    public function testGetSinglePropertyMultiplePages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test getting multiple properties from multiple pages. The properties
     * were set in setUp().
     */
    public function testGetMultiplePropertiesMultiplePages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test getting all properties from a single page. The properties were
     * set in setUp(). The properties retrieved from the page may include
     * additional properties not set in the test case that are added by
     * other extensions. Therefore, rather than checking to see if the
     * properties that were set in the test case exactly match the
     * retrieved properties, we need to check to see if they are a
     * subset of the retrieved properties. Since this version of PHPUnit
     * does not yet include assertArraySubset(), we needed to code the
     * equivalent functionality.
     */
    public function testGetAllProperties()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test getting all properties from multiple pages. The properties were
     * set in setUp(). See getAllProperties() above for more information.
     */
    public function testGetAllPropertiesMultiplePages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test caching when retrieving single properties by getting a property,
     * saving a new value for the property, then getting the property
     * again. The cached value for the property rather than the new value
     * of the property should be returned.
     */
    public function testSingleCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test caching when retrieving all properties by getting all
     * properties, saving a new value for a property, then getting all
     * properties again. The cached value for the properties rather than the
     * new value of the properties should be returned.
     */
    public function testMultiCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test that getting all properties clears the single properties
     * that have been cached by getting a property, saving a new value for
     * the property, getting all properties (which clears the cached single
     * properties), then getting the property again. The new value for the
     * property rather than the cached value of the property should be
     * returned.
     */
    public function testClearCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createPage($page, $text, $model = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setProperties($pageID, $properties)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setProperty($pageID, $propertyName, $propertyValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
