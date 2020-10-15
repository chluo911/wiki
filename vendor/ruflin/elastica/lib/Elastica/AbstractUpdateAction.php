<?php

namespace Elastica;

use Elastica\Exception\DeprecatedException;

/**
 * Base class for things that can be sent to the update api (Document and
 * Script).
 *
 * @author   Nik Everett <nik9000@gmail.com>
 */
class AbstractUpdateAction extends Param
{
    /**
     * @var \Elastica\Document
     */
    protected $_upsert;

    /**
     * Sets the id of the document.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->setParam('_id', $id);
    }

    /**
     * Returns document id.
     *
     * @return string|int Document id
     */
    public function getId()
    {
        return ($this->hasParam('_id')) ? $this->getParam('_id') : null;
    }

    /**
     * @return bool
     */
    public function hasId()
    {
        return '' !== (string) $this->getId();
    }

    /**
     * Sets lifetime of document.
     *
     * @param string $ttl
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function getTtl()
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
    public function hasTtl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the document type name.
     *
     * @param string $type Type name
     *
     * @return $this
     */
    public function setType($type)
    {
        if ($type instanceof Type) {
            $this->setIndex($type->getIndex());
            $type = $type->getName();
        }

        return $this->setParam('_type', $type);
    }

    /**
     * Return document type name.
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return string Document type name
     */
    public function getType()
    {
        return $this->getParam('_type');
    }

    /**
     * Sets the document index name.
     *
     * @param string $index Index name
     *
     * @return $this
     */
    public function setIndex($index)
    {
        if ($index instanceof Index) {
            $index = $index->getName();
        }

        return $this->setParam('_index', $index);
    }

    /**
     * Get the document index name.
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return string Index name
     */
    public function getIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the version of a document for use with optimistic concurrency control.
     *
     * @param int $version Document version
     *
     * @return $this
     *
     * @link https://www.elastic.co/blog/versioning
     */
    public function setVersion($version)
    {
        return $this->setParam('_version', (int) $version);
    }

    /**
     * Returns document version.
     *
     * @return string|int Document version
     */
    public function getVersion()
    {
        return $this->getParam('_version');
    }

    /**
     * @return bool
     */
    public function hasVersion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the version_type of a document
     * Default in ES is internal, but you can set to external to use custom versioning.
     *
     * @param int $versionType Document version type
     *
     * @return $this
     */
    public function setVersionType($versionType)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns document version type.
     *
     * @return string|int Document version type
     */
    public function getVersionType()
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
    public function hasVersionType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets parent document id.
     *
     * @param string|int $parent Parent document id
     *
     * @return $this
     *
     * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping-parent-field.html
     */
    public function setParent($parent)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the parent document id.
     *
     * @return string|int Parent document id
     */
    public function getParent()
    {
        return $this->getParam('_parent');
    }

    /**
     * @return bool
     */
    public function hasParent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set operation type.
     *
     * @param string $opType Only accept create
     *
     * @return $this
     */
    public function setOpType($opType)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get operation type.
     *
     * @return string
     */
    public function getOpType()
    {
        return $this->getParam('_op_type');
    }

    /**
     * @return bool
     */
    public function hasOpType()
    {
        return $this->hasParam('_op_type');
    }

    /**
     * Set percolate query param.
     *
     * @param string $value percolator filter
     *
     * @deprecated Option "percolate" deprecated as of ES 1.3 and will be removed in further Elastica releases. Use Percolator instead.
     *
     * @return $this
     */
    public function setPercolate($value = '*')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get percolate parameter.
     *
     * @deprecated Option "percolate" deprecated as of ES 1.3 and will be removed in further Elastica releases. Use Percolator instead.
     *
     * @return string
     */
    public function getPercolate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated Option "percolate" deprecated as of ES 1.3 and will be removed in further Elastica releases. Use Percolator instead.
     *
     * @return bool
     */
    public function hasPercolate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set routing query param.
     *
     * @param string $value routing
     *
     * @return $this
     */
    public function setRouting($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get routing parameter.
     *
     * @return string
     */
    public function getRouting()
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
    public function hasRouting()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array|string $fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return $this
     */
    public function setFieldsSource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function getFields()
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
    public function hasFields()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param int $num
     *
     * @return $this
     */
    public function setRetryOnConflict($num)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return int
     */
    public function getRetryOnConflict()
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
    public function hasRetryOnConflict()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        return $this->setParam('_timestamp', $timestamp);
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->getParam('_timestamp');
    }

    /**
     * @return bool
     */
    public function hasTimestamp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param bool $refresh
     *
     * @return $this
     */
    public function setRefresh($refresh = true)
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
    public function getRefresh()
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
    public function hasRefresh()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        return $this->setParam('_timeout', $timeout);
    }

    /**
     * @return bool
     */
    public function getTimeout()
    {
        return $this->getParam('_timeout');
    }

    /**
     * @return string
     */
    public function hasTimeout()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function setConsistency($timeout)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function getConsistency()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function hasConsistency()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function setReplication($timeout)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function getReplication()
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
    public function hasReplication()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param \Elastica\Document|array $data
     *
     * @return $this
     */
    public function setUpsert($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return \Elastica\Document
     */
    public function getUpsert()
    {
        return $this->_upsert;
    }

    /**
     * @return bool
     */
    public function hasUpsert()
    {
        return null !== $this->_upsert;
    }

    /**
     * @param array $fields         if empty array all options will be returned, field names can be either with underscored either without, i.e. _percolate, routing
     * @param bool  $withUnderscore should option keys contain underscore prefix
     *
     * @return array
     */
    public function getOptions(array $fields = array(), $withUnderscore = false)
    {
        if (!empty($fields)) {
            $data = array();
            foreach ($fields as $field) {
                $key = '_'.ltrim($field, '_');
                if ($this->hasParam($key) && '' !== (string) $this->getParam($key)) {
                    $data[$key] = $this->getParam($key);
                }
            }
        } else {
            $data = $this->getParams();
        }
        if (!$withUnderscore) {
            foreach ($data as $key => $value) {
                $data[ltrim($key, '_')] = $value;
                unset($data[$key]);
            }
        }

        return $data;
    }
}
