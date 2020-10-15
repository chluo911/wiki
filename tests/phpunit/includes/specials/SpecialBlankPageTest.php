<?php

/**
 * @licence GNU GPL v2+
 * @author Addshore
 *
 * @covers SpecialBlankpage
 */
class SpecialBlankPageTest extends SpecialPageTestBase
{

    /**
     * Returns a new instance of the special page under test.
     *
     * @return SpecialPage
     */
    protected function newSpecialPage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHasWikiMsg()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
