<?php
/**
 * PHPUnit tests for XMLTypeCheck.
 * @author physikerwelt
 * @group Xml
 * @covers XMLTypeCheck
 */
class XmlTypeCheckTest extends PHPUnit_Framework_TestCase
{
    const WELL_FORMED_XML = "<root><child /></root>";
    const MAL_FORMED_XML = "<root><child /></error>";
    // @codingStandardsIgnoreStart Generic.Files.LineLength
    const XML_WITH_PIH = '<?xml version="1.0"?><?xml-stylesheet type="text/xsl" href="/w/index.php"?><svg><child /></svg>';
    // @codingStandardsIgnoreEnd

    /**
     * @covers XMLTypeCheck::newFromString
     * @covers XMLTypeCheck::getRootElement
     */
    public function testWellFormedXML()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XMLTypeCheck::newFromString
     */
    public function testMalFormedXML()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify we check for recursive entity DOS
     *
     * (If the DOS isn't properly handled, the test runner will probably go OOM...)
     */
    public function testRecursiveEntity()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers XMLTypeCheck::processingInstructionHandler
     */
    public function testProcessingInstructionHandler()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
