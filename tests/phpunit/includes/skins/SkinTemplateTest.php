<?php

/**
 * @covers SkinTemplate
 *
 * @group Output
 *
 * @author Bene* < benestar.wikimedia@gmail.com >
 */

class SkinTemplateTest extends MediaWikiTestCase
{
    /**
     * @dataProvider makeListItemProvider
     */
    public function testMakeListItem($expected, $key, $item, $options, $message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function makeListItemProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
