<?php
/**
 * Unit tests for HTMLAutoCompleteSelectField
 *
 * @covers HTMLAutoCompleteSelectField
 */
class HtmlAutoCompleteSelectFieldTest extends MediaWikiTestCase
{
    public $options = [
        'Bulgaria'     => 'BGR',
        'Burkina Faso' => 'BFA',
        'Burundi'      => 'BDI',
    ];

    /**
     * Verify that attempting to instantiate an HTMLAutoCompleteSelectField
     * without providing any autocomplete options causes an exception to be
     * thrown.
     *
     * @expectedException        MWException
     * @expectedExceptionMessage called without any autocompletions
     */
    public function testMissingAutocompletions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify that the autocomplete options are correctly encoded as
     * the 'data-autocomplete' attribute of the field.
     *
     * @covers HTMLAutoCompleteSelectField::getAttributes
     */
    public function testGetAttributes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test that the optional select dropdown is included or excluded based on
     * the presence or absence of the 'options' parameter.
     */
    public function testOptionalSelectElement()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
