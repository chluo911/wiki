<?php

/**
 * @group JobQueue
 * @group medium
 * @group Database
 */
class RefreshLinksPartitionTest extends MediaWikiTestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->tablesUsed[] = 'page';
        $this->tablesUsed[] = 'revision';
        $this->tablesUsed[] = 'pagelinks';
    }

    /**
     * @dataProvider provider_backlinks
     */
    public function testRefreshLinks($ns, $dbKey, $pages)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provider_backlinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
