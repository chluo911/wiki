<?php
/**
 * Overloads the relevant methods of the real ResultsWrapper so it
 * doesn't go anywhere near an actual database.
 */
class FakeResultWrapper extends ResultWrapper
{
    /** @var $result stdClass[] */

    /**
     * @param stdClass[] $rows
     */
    public function __construct(array $rows)
    {
        parent::__construct(null, $rows);
    }

    public function numRows()
    {
        return count($this->result);
    }

    public function fetchRow()
    {
        if ($this->pos < count($this->result)) {
            $this->currentRow = $this->result[$this->pos];
        } else {
            $this->currentRow = false;
        }
        $this->pos++;
        if (is_object($this->currentRow)) {
            return get_object_vars($this->currentRow);
        } else {
            return $this->currentRow;
        }
    }

    public function seek($row)
    {
        $this->pos = $row;
    }

    public function free()
    {
    }

    public function fetchObject()
    {
        $this->fetchRow();
        if ($this->currentRow) {
            return (object)$this->currentRow;
        } else {
            return false;
        }
    }

    public function rewind()
    {
        $this->pos = 0;
        $this->currentRow = null;
    }

    public function next()
    {
        return $this->fetchObject();
    }
}
