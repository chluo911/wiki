<?php
/**
 * Utility class
 * @ingroup Database
 *
 * This allows us to distinguish a blob from a normal string and an array of strings
 */
class Blob
{
    /** @var string */
    protected $mData;

    public function __construct($data)
    {
        $this->mData = $data;
    }

    public function fetch()
    {
        return $this->mData;
    }
}
