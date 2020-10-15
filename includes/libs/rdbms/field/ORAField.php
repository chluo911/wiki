<?php
class ORAField implements Field
{
    private $name;
    private $tablename;
    private $default;
    private $max_length;
    private $nullable;
    private $is_pk;
    private $is_unique;
    private $is_multiple;
    private $is_key;
    private $type;

    public function __construct($info)
    {
        $this->name = $info['column_name'];
        $this->tablename = $info['table_name'];
        $this->default = $info['data_default'];
        $this->max_length = $info['data_length'];
        $this->nullable = $info['not_null'];
        $this->is_pk = isset($info['prim']) && $info['prim'] == 1 ? 1 : 0;
        $this->is_unique = isset($info['uniq']) && $info['uniq'] == 1 ? 1 : 0;
        $this->is_multiple = isset($info['nonuniq']) && $info['nonuniq'] == 1 ? 1 : 0;
        $this->is_key = ($this->is_pk || $this->is_unique || $this->is_multiple);
        $this->type = $info['data_type'];
    }

    public function name()
    {
        return $this->name;
    }

    public function tableName()
    {
        return $this->tablename;
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

    public function isKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isMultipleKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function type()
    {
        return $this->type;
    }
}
