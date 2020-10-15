<?php
/**
 * Base for all database-specific classes representing information about database fields
 * @ingroup Database
 */
interface Field
{
    /**
     * Field name
     * @return string
     */
    public function name();

    /**
     * Name of table this field belongs to
     * @return string
     */
    public function tableName();

    /**
     * Database type
     * @return string
     */
    public function type();

    /**
     * Whether this field can store NULL values
     * @return bool
     */
    public function isNullable();
}
