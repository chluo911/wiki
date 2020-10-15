<?php

use MediaWiki\Linker\LinkRenderer;
use MediaWiki\Linker\LinkRendererFactory;
use MediaWiki\MediaWikiServices;

/**
 * @covers MediaWiki\Linker\LinkRendererFactory
 */
class LinkRendererFactoryTest extends MediaWikiLangTestCase
{

    /**
     * @var TitleFormatter
     */
    private $titleFormatter;

    /**
     * @var LinkCache
     */
    private $linkCache;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideCreateFromLegacyOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideCreateFromLegacyOptions
     */
    public function testCreateFromLegacyOptions($options, $func, $val)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreateForUser()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
