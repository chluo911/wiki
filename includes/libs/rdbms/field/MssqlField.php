<?php
class MssqlField implements Field
{
    private $name;
    private $tableName;
    private $default;
    private $max_length;
    private $nullable;
    private $type;

    public function __construct($info)
    {
        $this->name = $info['COLUMN_NAME'];
        $this->tableName = $info['TABLE_NAME'];
        $this->default = $info['COLUMN_DEFAULT'];
        $this->max_length = $info['CHARACTER_MAXIMUM_LENGTH'];
        $this->nullable = !(strtolower($info['IS_NULLABLE']) == 'no');
        $this->type = $info['DATA_TYPE'];
    }

    public function name()
    {
        return $this->name;
    }

    public function tableName()
    {
        return $this->tableName;
    }

    public function defaultValue()
    {
        return $this->default;
    }

    public function maxLength()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isNullable()
    {
        return $this->nullable;
    }

    public function type()
    {
        return $this->type;
    }
}
