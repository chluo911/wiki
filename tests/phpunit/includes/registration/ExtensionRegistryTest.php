<?php

class ExtensionRegistryTest extends MediaWikiTestCase
{

    /**
     * @covers ExtensionRegistry::exportExtractedData
     * @dataProvider provideExportExtractedDataGlobals
     */
    public function testExportExtractedDataGlobals($desc, $before, $globals, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideExportExtractedDataGlobals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
