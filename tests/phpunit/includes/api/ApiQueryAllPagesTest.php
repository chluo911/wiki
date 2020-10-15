<?php

/**
 * @group API
 * @group Database
 * @group medium
 */
class ApiQueryAllPagesTest extends ApiTestCase
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
     *Test bug 25702
     *Prefixes of API search requests are not handled with case sensitivity and may result
     *in wrong search results
     */
    public function testPrefixNormalizationSearchBug()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
