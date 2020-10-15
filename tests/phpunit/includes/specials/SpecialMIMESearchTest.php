<?php
/**
 * @group Database
 */

class SpecialMIMESearchTest extends MediaWikiTestCase
{

    /** @var MIMEsearchPage */
    private $page;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providerMimeFiltering
     * @param string $par Subpage for special page
     * @param string $major Major MIME type we expect to look for
     * @param string $minor Minor MIME type we expect to look for
     */
    public function testMimeFiltering($par, $major, $minor)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function providerMimeFiltering()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
