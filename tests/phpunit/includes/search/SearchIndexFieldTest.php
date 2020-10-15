<?php

/**
 * @group Search
 * @covers SearchIndexFieldDefinition
 */
class SearchIndexFieldTest extends MediaWikiTestCase
{
    public function getMergeCases()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider getMergeCases
     */
    public function testMerge($t1, $n1, $t2, $n2, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
