<?php
/**
 * @author Santhosh Thottingal
 * @copyright Copyright © 2011, Santhosh Thottingal
 * @file
 */

/** Tests for MediaWiki languages/LanguageNl.php */
class LanguageNlTest extends LanguageClassesTestCase
{

    /**
     * @covers Language::formatNum
     * @todo split into a test and a dataprovider
     */
    public function testFormatNum()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
