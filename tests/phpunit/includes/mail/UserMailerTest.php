<?php

class UserMailerTest extends MediaWikiLangTestCase
{

    /**
     * @covers UserMailer::quotedPrintable
     */
    public function testQuotedPrintable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
