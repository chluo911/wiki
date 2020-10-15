<?php

class FileBackendDBRepoWrapperTest extends MediaWikiTestCase
{
    protected $backendName = 'foo-backend';
    protected $repoName = 'pureTestRepo';

    /**
     * @dataProvider getBackendPathsProvider
     * @covers FileBackendDBRepoWrapper::getBackendPaths
     */
    public function testGetBackendPaths(
        $mocks,
        $latest,
        $dbReadsExpected,
        $dbReturnValue,
        $originalPath,
        $expectedBackendPath,
        $message
    )
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getBackendPathsProvider()
    {
        $prefix = 'mwstore://' . $this->backendName . '/' . $this->repoName;
        $mocksForCaching = $this->getMocks();

        return [
            [
                $mocksForCaching,
                false,
                $this->once(),
                '96246614d75ba1703bdfd5d7660bb57407aaf5d9',
                $prefix . '-public/f/o/foobar.jpg',
                $prefix . '-original/9/6/2/96246614d75ba1703bdfd5d7660bb57407aaf5d9',
                'Public path translated correctly',
            ],
            [
                $mocksForCaching,
                false,
                $this->never(),
                '96246614d75ba1703bdfd5d7660bb57407aaf5d9',
                $prefix . '-public/f/o/foobar.jpg',
                $prefix . '-original/9/6/2/96246614d75ba1703bdfd5d7660bb57407aaf5d9',
                'LRU cache leveraged',
            ],
            [
                $this->getMocks(),
                true,
                $this->once(),
                '96246614d75ba1703bdfd5d7660bb57407aaf5d9',
                $prefix . '-public/f/o/foobar.jpg',
                $prefix . '-original/9/6/2/96246614d75ba1703bdfd5d7660bb57407aaf5d9',
                'Latest obtained',
            ],
            [
                $this->getMocks(),
                true,
                $this->never(),
                '96246614d75ba1703bdfd5d7660bb57407aaf5d9',
                $prefix . '-deleted/f/o/foobar.jpg',
                $prefix . '-original/f/o/o/foobar',
                'Deleted path translated correctly',
            ],
            [
                $this->getMocks(),
                true,
                $this->once(),
                null,
                $prefix . '-public/b/a/baz.jpg',
                $prefix . '-public/b/a/baz.jpg',
                'Path left untouched if no sha1 can be found',
            ],
        ];
    }

    /**
     * @covers FileBackendDBRepoWrapper::getFileContentsMulti
     */
    public function testGetFileContentsMulti()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getMocks()
    {
        $dbMock = $this->getMockBuilder('DatabaseMysql')
            ->disableOriginalConstructor()
            ->getMock();

        $backendMock = $this->getMock(
            'FSFileBackend',
            [],
            [ [
                'name' => $this->backendName,
                'wikiId' => wfWikiID()
            ] ]
        );

        $wrapperMock = $this->getMock(
            'FileBackendDBRepoWrapper',
            [ 'getDB' ],
            [ [
                'backend' => $backendMock,
                'repoName' => $this->repoName,
                'dbHandleFactory' => null
            ] ]
        );

        $wrapperMock->expects($this->any())->method('getDB')->will($this->returnValue($dbMock));

        return [ $dbMock, $backendMock, $wrapperMock ];
    }
}
