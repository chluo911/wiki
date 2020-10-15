<?php
/**
 * The tests here verify the structure of the code.  This is for outright bugs,
 * not just style issues.
 */

class StructureTest extends MediaWikiTestCase
{
    /**
     * Verify all files that appear to be tests have file names ending in
     * Test.  If the file names do not end in Test, they will not be run.
     * @group medium
     */
    public function testUnitTestFileNamesEndWithTest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Filter to remove testUnitTestFileNamesEndWithTest false positives.
     * @param string $filename
     * @return bool
     */
    public function filterSuites($filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
