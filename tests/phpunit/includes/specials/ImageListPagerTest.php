<?php
/**
 * Test class for ImageListPagerTest class.
 *
 * Copyright © 2013, Antoine Musso
 * Copyright © 2013, Siebrand Mazeland
 * Copyright © 2013, Wikimedia Foundation Inc.
 *
 * @group Database
 */

class ImageListPagerTest extends MediaWikiTestCase
{
    /**
     * @expectedException MWException
     * @expectedExceptionMessage invalid_field
     * @covers ImageListPager::formatValue
     */
    public function testFormatValuesThrowException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
