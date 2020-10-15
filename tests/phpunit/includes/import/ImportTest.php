<?php

/**
 * Test class for Import methods.
 *
 * @group Database
 *
 * @author Sebastian Brückner < sebastian.brueckner@student.hpi.uni-potsdam.de >
 */
class ImportTest extends MediaWikiLangTestCase
{
    private function getDataSource($xml)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiImporter
     * @dataProvider getUnknownTagsXML
     * @param string $xml
     * @param string $text
     * @param string $title
     */
    public function testUnknownXMLTags($xml, $text, $title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getUnknownTagsXML()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiImporter::handlePage
     * @dataProvider getRedirectXML
     * @param string $xml
     * @param string|null $redirectTitle
     */
    public function testHandlePageContainsRedirect($xml, $redirectTitle)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getRedirectXML()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers WikiImporter::handleSiteInfo
     * @dataProvider getSiteInfoXML
     * @param string $xml
     * @param array|null $namespaces
     */
    public function testSiteInfoContainsNamespaces($xml, $namespaces)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getSiteInfoXML()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
