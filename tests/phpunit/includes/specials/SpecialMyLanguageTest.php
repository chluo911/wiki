<?php

/**
 * @group Database
 * @covers SpecialMyLanguage
 */
class SpecialMyLanguageTest extends MediaWikiTestCase
{
    public function addDBDataOnce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers SpecialMyLanguage::findTitle
     * @dataProvider provideFindTitle
     * @param string $expected
     * @param string $subpage
     * @param string $langCode
     * @param string $userLang
     */
    public function testFindTitle($expected, $subpage, $langCode, $userLang)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $expected
     * @param Title|null $title
     */
    private function assertTitle($expected, $title)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideFindTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
