<?php

/**
 * @group API
 * @group Database
 * @group medium
 *
 * @covers ApiOptions
 */
class ApiOptionsTest extends MediaWikiLangTestCase
{

    /** @var PHPUnit_Framework_MockObject_MockObject */
    private $mUserMock;
    /** @var ApiOptions */
    private $mTested;
    private $mSession;
    /** @var DerivativeContext */
    private $mContext;

    private static $Success = [ 'options' => 'success' ];

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function hookGetPreferences($user, &$preferences)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param IContextSource $context
     * @param array|null $options
     *
     * @return array
     */
    public function getOptionKinds(IContextSource $context, $options = null)
    {
        // Match with above.
        $kinds = [
            'name' => 'registered',
            'willBeNull' => 'registered',
            'willBeEmpty' => 'registered',
            'willBeHappy' => 'registered',
            'testmultiselect-opt1' => 'registered-multiselect',
            'testmultiselect-opt2' => 'registered-multiselect',
            'testmultiselect-opt3' => 'registered-multiselect',
            'testmultiselect-opt4' => 'registered-multiselect',
            'special' => 'special',
        ];

        if ($options === null) {
            return $kinds;
        }

        $mapping = [];
        foreach ($options as $key => $value) {
            if (isset($kinds[$key])) {
                $mapping[$key] = $kinds[$key];
            } elseif (substr($key, 0, 7) === 'userjs-') {
                $mapping[$key] = 'userjs';
            } else {
                $mapping[$key] = 'unused';
            }
        }

        return $mapping;
    }

    private function getSampleRequest($custom = [])
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function executeQuery($request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UsageException
     */
    public function testNoToken()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAnon()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testNoOptionname()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testNoChanges()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testReset()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testResetKinds()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testOptionWithValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testOptionResetValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testChange()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testResetChangeOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testMultiSelect()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSpecialOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUnknownOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUserjsOption()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
