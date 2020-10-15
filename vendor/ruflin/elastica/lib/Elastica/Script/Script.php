<?php

namespace Elastica\Script;

use Elastica\Exception\InvalidException;

/**
 * Script objects, containing script internals.
 *
 * @author avasilenko <aa.vasilenko@gmail.com>
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/reference/current/modules-scripting.html
 */
class Script extends AbstractScript
{
    const LANG_MVEL = 'mvel';
    const LANG_JS = 'js';
    const LANG_GROOVY = 'groovy';
    const LANG_PYTHON = 'python';
    const LANG_NATIVE = 'native';

    /**
     * @var string
     */
    private $_script;

    /**
     * @var string
     */
    private $_lang;

    /**
     * @param string      $script
     * @param array|null  $params
     * @param string|null $lang
     * @param null        $id
     */
    public function __construct($script, array $params = null, $lang = null, $id = null)
    {
        parent::__construct($params, $id);

        $this->setScript($script);

        if ($lang) {
            $this->setLang($lang);
        }
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->_lang = $lang;

        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $script
     *
     * @return $this
     */
    public function setScript($script)
    {
        $this->_script = $script;

        return $this;
    }

    /**
     * @return string
     */
    public function getScript()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string|array|\Elastica\Script $data
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
     * {@inheritdoc}
     */
    public function toArray()
    {
        $array = array(
            'script' => $this->_script,
        );

        if (!empty($this->_params)) {
            $array['params'] = $this->_convertArrayable($this->_params);
        }

        if ($this->_lang) {
            $array['lang'] = $this->_lang;
        }

        return $array;
    }
}
