<?php
/**
 * MediaWiki Widgets �? DateTimeInputWidget class.
 *
 * @copyright 2016 MediaWiki Widgets Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */
namespace MediaWiki\Widget;

use OOUI\Tag;

/**
 * Date-time input widget.
 */
class DateTimeInputWidget extends \OOUI\InputWidget
{
    protected $type = null;
    protected $min = null;
    protected $max = null;
    protected $clearable = null;

    /**
     * @param array $config Configuration options
     * @param string $config['type'] 'date', 'time', or 'datetime'
     * @param string $config['min'] Minimum date, time, or datetime
     * @param string $config['max'] Maximum date, time, or datetime
     * @param bool $config['clearable'] Whether to provide for blanking the value.
     */
    public function __construct(array $config = [])
    {
        // We need $this->type set before calling the parent constructor
        if (isset($config['type'])) {
            $this->type = $config['type'];
        } else {
            throw new \InvalidArgumentException('$config[\'type\'] must be specified');
        }

        // Parent constructor
        parent::__construct($config);

        // Properties, which are ignored in PHP and just shipped back to JS
        if (isset($config['min'])) {
            $this->min = $config['min'];
        }
        if (isset($config['max'])) {
            $this->max = $config['max'];
        }
        if (isset($config['clearable'])) {
            $this->clearable = $config['clearable'];
        }

        // Initialization
        $this->addClasses([ 'mw-widgets-datetime-dateTimeInputWidget' ]);
    }

    protected function getJavaScriptClassName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getConfig(&$config)
    {
        $config['type'] = $this->type;
        if ($this->min !== null) {
            $config['min'] = $this->min;
        }
        if ($this->max !== null) {
            $config['max'] = $this->max;
        }
        if ($this->clearable !== null) {
            $config['clearable'] = $this->clearable;
        }
        return parent::getConfig($config);
    }

    protected function getInputElement($config)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
