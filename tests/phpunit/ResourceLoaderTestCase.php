<?php

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

abstract class ResourceLoaderTestCase extends MediaWikiTestCase
{
    // Version hash for a blank file module.
    // Result of ResourceLoader::makeHash(), ResourceLoaderTestModule
    // and ResourceLoaderFileModule::getDefinitionSummary().
    const BLANK_VERSION = '09p30q0';

    /**
     * @param string $lang
     * @param string $dir
     * @return ResourceLoaderContext
     */
    protected function getResourceLoaderContext($lang = 'en', $dir = 'ltr')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSettings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/* Stubs */

class ResourceLoaderTestModule extends ResourceLoaderModule
{
    protected $messages = [];
    protected $dependencies = [];
    protected $group = null;
    protected $source = 'local';
    protected $position = 'bottom';
    protected $script = '';
    protected $styles = '';
    protected $skipFunction = null;
    protected $isRaw = false;
    protected $isKnownEmpty = false;
    protected $type = ResourceLoaderModule::LOAD_GENERAL;
    protected $targets = [ 'phpunit' ];

    public function __construct($options = [])
    {
        foreach ($options as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getScript(ResourceLoaderContext $context)
    {
        return $this->validateScriptFile('input', $this->script);
    }

    public function getStyles(ResourceLoaderContext $context)
    {
        return [ '' => $this->styles ];
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function getDependencies(ResourceLoaderContext $context = null)
    {
        return $this->dependencies;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function getSource()
    {
        return $this->source;
    }
    public function getPosition()
    {
        return $this->position;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSkipFunction()
    {
        return $this->skipFunction;
    }

    public function isRaw()
    {
        return $this->isRaw;
    }
    public function isKnownEmpty(ResourceLoaderContext $context)
    {
        return $this->isKnownEmpty;
    }

    public function enableModuleContentVersion()
    {
        return true;
    }
}

class ResourceLoaderFileModuleTestModule extends ResourceLoaderFileModule
{
}

class EmptyResourceLoader extends ResourceLoader
{
    // TODO: This won't be needed once ResourceLoader is empty by default
    // and default registrations are done from ServiceWiring instead.
    public function __construct(Config $config = null, LoggerInterface $logger = null)
    {
        $this->setLogger($logger ?: new NullLogger());
        $this->config = $config ?: ConfigFactory::getDefaultInstance()->makeConfig('main');
        $this->setMessageBlobStore(new MessageBlobStore($this, $this->getLogger()));
    }
}
