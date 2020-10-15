<?php
/**
 * Test class for SpecialRecentchanges class
 *
 * Copyright © 2011, Antoine Musso
 *
 * @author Antoine Musso
 * @group Database
 *
 * @covers SpecialRecentChanges
 */
class SpecialRecentchangesTest extends MediaWikiTestCase
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
     * @var SpecialRecentChanges
     */
    protected $rc;

    /** helper to test SpecialRecentchanges::buildMainQueryConds() */
    private function assertConditions($expected, $requestOptions = null, $message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** return false if condition begin with 'rc_timestamp ' */
    private static function filterOutRcTimestampCondition($var)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRcNsFilter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRcNsFilterInversion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @bug 2429
     * @dataProvider provideNamespacesAssociations
     */
    public function testRcNsFilterAssociation($ns1, $ns2)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @bug 2429
     * @dataProvider provideNamespacesAssociations
     */
    public function testRcNsFilterAssociationWithInversion($ns1, $ns2)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provides associated namespaces to test recent changes
     * namespaces association filtering.
     */
    public static function provideNamespacesAssociations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
