<?php

namespace Elastica\Script;

use Elastica\Exception\InvalidException;

/**
 * Script objects, containing script internals.
 *
 * @author avasilenko <aa.vasilenko@gmail.com>
 * @author Nicolas Assing <nicolas.assing@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/modules-scripting.html
 */
class ScriptFile extends Script
{
    /**
     * @var string
     */
    private $_scriptFile;

    /**
     * @param string     $scriptFile
     * @param array|null $params
     * @param null       $id
     */
    public function __construct($scriptFile, array $params = null, $id = null)
    {
        parent::__construct(null, $params, null, $id);

        $this->setScriptFile($scriptFile);
    }

    /**
     * @param string $scriptFile
     *
     * @return $this
     */
    public function setScriptFile($scriptFile)
    {
        $this->_scriptFile = $scriptFile;

        return $this;
    }

    /**
     * @return string
     */
    public function getScriptFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string|array|\Elastica\ScriptFile $data
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return self
     */
    public static function create($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $data
     *
     * @throws \Elastica\Exception\InvalidException
     *
     * @return self
     */
    protected static function _createFromArray(array $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = array(
            'script_file' => $this->_scriptFile,
        );

        if (!empty($this->_params)) {
            $array['params'] = $this->_params;
        }

        return $array;
    }
}
