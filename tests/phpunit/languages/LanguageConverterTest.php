<?php

class LanguageConverterTest extends MediaWikiLangTestCase
{
    /** @var LanguageToTest */
    protected $lang = null;
    /** @var TestConverter */
    protected $lc = null;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     */
    public function testGetPreferredVariantDefaults()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     * @covers LanguageConverter::getHeaderVariant
     */
    public function testGetPreferredVariantHeaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     * @covers LanguageConverter::getHeaderVariant
     */
    public function testGetPreferredVariantHeaderWeight()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     * @covers LanguageConverter::getHeaderVariant
     */
    public function testGetPreferredVariantHeaderWeight2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     * @covers LanguageConverter::getHeaderVariant
     */
    public function testGetPreferredVariantHeaderMulti()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     */
    public function testGetPreferredVariantUserOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     * @covers LanguageConverter::getUserVariant
     */
    public function testGetPreferredVariantUserOptionForForeignLanguage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     * @covers LanguageConverter::getUserVariant
     * @covers LanguageConverter::getURLVariant
     */
    public function testGetPreferredVariantHeaderUserVsUrl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     */
    public function testGetPreferredVariantDefaultLanguageVariant()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers LanguageConverter::getPreferredVariant
     * @covers LanguageConverter::getURLVariant
     */
    public function testGetPreferredVariantDefaultLanguageVsUrlVariant()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Test converter (from Tajiki to latin orthography)
 */
class TestConverter extends LanguageConverter
{
    private $table = [
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
    ];

    public function loadDefaultTables()
    {
        $this->mTables = [
            'tg-latn' => new ReplacementArray($this->table),
            'tg' => new ReplacementArray()
        ];
    }
}

class LanguageToTest extends Language
{
    public function __construct()
    {
        parent::__construct();
        $variants = [ 'tg', 'tg-latn' ];
        $this->mConverter = new TestConverter($this, 'tg', $variants);
    }
}
