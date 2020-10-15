<?php

/**
 * Verifies that special page aliases are valid, with no slashes.
 *
 * @group Language
 * @group SpecialPageAliases
 * @group SystemTest
 * @group medium
 *
 * @author Katie Filbert < aude.wiki@gmail.com >
 */
class SpecialPageAliasTest extends MediaWikiTestCase
{

    /**
     * @dataProvider validSpecialPageAliasesProvider
     */
    public function testValidSpecialPageAliases($code, $specialPageAliases)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function validSpecialPageAliasesProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $code
     *
     * @return array
     */
    protected function getSpecialPageAliases($code)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
