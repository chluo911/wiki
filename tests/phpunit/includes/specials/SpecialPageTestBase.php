<?php

/**
 * Base class for testing special pages.
 *
 * @since 1.26
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 * @author Daniel Kinzler
 * @author Addshore
 * @author Thiemo Mättig
 */
abstract class SpecialPageTestBase extends MediaWikiTestCase
{
    private $obLevel;

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
     * Returns a new instance of the special page under test.
     *
     * @return SpecialPage
     */
    abstract protected function newSpecialPage();

    /**
     * @param string $subPage The subpage parameter to call the page with
     * @param WebRequest|null $request Web request that may contain URL parameters, etc
     * @param Language|string|null $language The language which should be used in the context
     * @param User|null $user The user which should be used in the context of this special page
     *
     * @throws Exception
     * @return array( string, WebResponse ) A two-elements array containing the HTML output
     * generated by the special page as well as the response object.
     */
    protected function executeSpecialPage(
        $subPage = '',
        WebRequest $request = null,
        $language = null,
        User $user = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
