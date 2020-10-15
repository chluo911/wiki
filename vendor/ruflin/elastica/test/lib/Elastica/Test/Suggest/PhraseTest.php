<?php

namespace Elastica\Test\Suggest;

use Elastica\Document;
use Elastica\Index;
use Elastica\Suggest;
use Elastica\Suggest\CandidateGenerator\DirectGenerator;
use Elastica\Suggest\Phrase;
use Elastica\Test\Base as BaseTest;

class PhraseTest extends BaseTest
{
    /**
     * @return Index
     */
    protected function _getIndexForTest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group unit
     */
    public function testToArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group functional
     */
    public function testPhraseSuggest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
