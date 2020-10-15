<?php

use Wikimedia\ScopedCallback;

class WikiCategoryPageTest extends MediaWikiLangTestCase
{

    /**
     * @return PHPUnit_Framework_MockObject_MockObject|PageProps
     */
    private function getMockPageProps()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiCategoryPage::isHidden
     */
    public function testHiddenCategory_PropertyNotSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideCategoryContent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCategoryContent
     * @covers WikiCategoryPage::isHidden
     */
    public function testHiddenCategory_PropertyIsSet($isHidden)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
