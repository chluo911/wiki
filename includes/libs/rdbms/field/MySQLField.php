<?php
class MySQLField implements Field
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
    private $binary;
    private $is_numeric;
    private $is_blob;
    private $is_unsigned;
    private $is_zerofill;

    public function __construct($info)
    {
        $this->name = $info->name;
        $this->tablename = $info->table;
        $this->default = $info->def;
        $this->max_length = $info->max_length;
        $this->nullable = !$info->not_null;
        $this->is_pk = $info->primary_key;
        $this->is_unique = $info->unique_key;
        $this->is_multiple = $info->multiple_key;
        $this->is_key = ($this->is_pk || $this->is_unique || $this->is_multiple);
        $this->type = $info->type;
        $this->binary = isset($info->binary) ? $info->binary : false;
        $this->is_numeric = isset($info->numeric) ? $info->numeric : false;
        $this->is_blob = isset($info->blob) ? $info->blob : false;
        $this->is_unsigned = isset($info->unsigned) ? $info->unsigned : false;
        $this->is_zerofill = isset($info->zerofill) ? $info->zerofill : false;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function tableName()
    {
        return $this->tablename;
    }

    /**
     * @return string
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isNullable()
    {
        return $this->nullable;
    }

    public function defaultValue()
    {
        return $this->default;
    }

    /**
     * @return bool
     */
    public function isKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isMultipleKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isBinary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isNumeric()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isBlob()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isUnsigned()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isZerofill()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
