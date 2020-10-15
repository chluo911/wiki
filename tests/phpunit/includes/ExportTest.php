<?php

/**
 * Test class for Export methods.
 *
 * @group Database
 *
 * @author Isaac Hutt <mhutti1@gmail.com>
 */
class ExportTest extends MediaWikiLangTestCase
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
     * @covers WikiExporter::pageByTitle
     */
    public function testPageByTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
