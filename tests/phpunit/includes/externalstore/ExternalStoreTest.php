<?php
/**
 * External Store tests
 */

class ExternalStoreTest extends MediaWikiTestCase
{

    /**
     * @covers ExternalStore::fetchFromURL
     */
    public function testExternalFetchFromURL()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class ExternalStoreFOO
{
    protected $data = [
        'cluster1' => [
            '200' => 'Hello',
            '300' => [
                'Hello', 'World',
            ],
        ],
    ];

    /**
     * Fetch data from given URL
     * @param string $url An url of the form FOO://cluster/id or FOO://cluster/id/itemid.
     * @return mixed
     */
    public function fetchFromURL($url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
