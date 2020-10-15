<?php
class SQLiteField implements Field
{
    private $info;
    private $tableName;

    public function __construct($info, $tableName)
    {
        $this->info = $info;
        $this->tableName = $tableName;
    }

    public function name()
    {
        return $this->info->name;
    }

    public function tableName()
    {
        return $this->tableName;
    }

    public function defaultValue()
    {
        if (is_string($this->info->dflt_value)) {
            // Typically quoted
            if (preg_match('/^\'(.*)\'$', $this->info->dflt_value)) {
                return str_replace("''", "'", $this->info->dflt_value);
            }
        }

        return $this->info->dflt_value;
    }

    /**
     * @return bool
     */
    public function isNullable()
    {
        return !$this->info->notnull;
    }

    public function type()
    {
        return $this->info->type;
    }
}
