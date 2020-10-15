<?php

abstract class ApiTestCase extends MediaWikiLangTestCase
{
    protected static $apiUrl;

    /**
     * @var ApiTestContext
     */
    protected $apiContext;

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
     * Edits or creates a page/revision
     * @param string $pageName Page title
     * @param string $text Content of the page
     * @param string $summary Optional summary string for the revision
     * @param int $defaultNs Optional namespace id
     * @return array Array as returned by WikiPage::doEditContent()
     */
    protected function editPage($pageName, $text, $summary = '', $defaultNs = NS_MAIN)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Does the API request and returns the result.
     *
     * The returned value is an array containing
     * - the result data (array)
     * - the request (WebRequest)
     * - the session data of the request (array)
     * - if $appendModule is true, the Api module $module
     *
     * @param array $params
     * @param array|null $session
     * @param bool $appendModule
     * @param User|null $user
     *
     * @return array
     */
    protected function doApiRequest(
        array $params,
        array $session = null,
        $appendModule = false,
        User $user = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add an edit token to the API request
     * This is cheating a bit -- we grab a token in the correct format and then
     * add it to the pseudo-session and to the request, without actually
     * requesting a "real" edit token.
     *
     * @param array $params Key-value API params
     * @param array|null $session Session array
     * @param User|null $user A User object for the context
     * @return array Result of the API call
     * @throws Exception In case wsToken is not set in the session
     */
    protected function doApiRequestWithToken(
        array $params,
        array $session = null,
        User $user = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doLogin($testUser = 'sysop')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getTokenList(TestUser $user, $session = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testApiTestGroup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
