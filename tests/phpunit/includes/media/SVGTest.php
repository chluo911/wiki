<?php

/**
 * @group Media
 */
class SvgTest extends MediaWikiMediaTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $filename
     * @param array $expected The expected independent metadata
     * @dataProvider providerGetIndependentMetaArray
     * @covers SvgHandler::getCommonMetaArray
     */
    public function testGetIndependentMetaArray($filename, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providerGetIndependentMetaArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
