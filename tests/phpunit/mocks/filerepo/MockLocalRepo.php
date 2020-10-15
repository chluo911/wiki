<?php

/**
 * Class simulating a local file repo.
 *
 * @ingroup FileRepo
 * @since 1.28
 */
class MockLocalRepo extends LocalRepo
{
    public function getLocalCopy($virtualUrl)
    {
        return new MockFSFile(wfTempDir() . '/' . wfRandomString(32));
    }

    public function getLocalReference($virtualUrl)
    {
        return new MockFSFile(wfTempDir() . '/' . wfRandomString(32));
    }

    public function getFileProps($virtualUrl)
    {
        $fsFile = $this->getLocalReference($virtualUrl);

        return $fsFile->getProps();
    }
}
