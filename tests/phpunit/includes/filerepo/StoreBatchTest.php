<?php

/**
 * @group FileRepo
 * @group medium
 */
class StoreBatchTest extends MediaWikiTestCase
{
    protected $createdFiles;
    protected $date;
    /** @var FileRepo */
    protected $repo;

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
     * Store a file or virtual URL source into a media file name.
     *
     * @param string $originalName The title of the image
     * @param string $srcPath The filepath or virtual URL
     * @param int $flags Flags to pass into repo::store().
     * @return FileRepoStatus
     */
    private function storeit($originalName, $srcPath, $flags)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test storing a file using different flags.
     *
     * @param string $fn The title of the image
     * @param string $infn The name of the file (in the filesystem)
     * @param string $otherfn The name of the different file (in the filesystem)
     * @param bool $fromrepo 'true' if we want to copy from a virtual URL out of the Repo.
     */
    private function storecohort($fn, $infn, $otherfn, $fromrepo)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers FileRepo::store
     */
    public function teststore()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
