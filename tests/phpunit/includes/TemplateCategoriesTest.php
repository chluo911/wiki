<?php

/**
 * @group Database
 */
require __DIR__ . "/../../../maintenance/runJobs.php";

class TemplateCategoriesTest extends MediaWikiLangTestCase
{

    /**
     * @covers Title::getParentCategories
     */
    public function testTemplateCategories()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
