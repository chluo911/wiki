<?php
use MediaWiki\MediaWikiServices;

/**
 * Gadgets repo powered by MediaWiki:Gadgets-definition
 */
class MediaWikiGadgetsDefinitionRepo extends GadgetRepo
{
    const CACHE_VERSION = 2;

    private $definitionCache;

    public function getGadget($id)
    {
        $gadgets = $this->loadGadgets();
        if (!isset($gadgets[$id])) {
            throw new InvalidArgumentException("No gadget registered for '$id'");
        }

        return $gadgets[$id];
    }

    public function getGadgetIds()
    {
        $gadgets = $this->loadGadgets();
        if ($gadgets) {
            return array_keys($gadgets);
        } else {
            return array();
        }
    }

    /**
     * Purge the definitions cache, for example if MediaWiki:Gadgets-definition
     * was edited.
     */
    public function purgeDefinitionCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function getCheckKey()
    {
        return wfMemcKey('gadgets-definition', Gadget::GADGET_CLASS_VERSION, self::CACHE_VERSION);
    }

    /**
     * Loads list of gadgets and returns it as associative array of sections with gadgets
     * e.g. array( 'sectionnname1' => array( $gadget1, $gadget2 ),
     *             'sectionnname2' => array( $gadget3 ) );
     * @return array|bool Gadget array or false on failure
     */
    protected function loadGadgets()
    {
        if ($this->definitionCache !== null) {
            return $this->definitionCache; // process cache hit
        }

        // Ideally $t1Cache is APC, and $wanCache is memcached
        $t1Cache = ObjectCache::getLocalServerInstance('hash');
        $wanCache = MediaWikiServices::getInstance()->getMainWANObjectCache();

        $key = $this->getCheckKey();

        // (a) Check the tier 1 cache
        $value = $t1Cache->get($key);
        // Check if it passes a blind TTL check (avoids I/O)
        if ($value && (microtime(true) - $value['time']) < 10) {
            $this->definitionCache = $value['gadgets']; // process cache
            return $this->definitionCache;
        }
        // Cache generated after the "check" time should be up-to-date
        $ckTime = $wanCache->getCheckKeyTime($key) + WANObjectCache::HOLDOFF_TTL;
        if ($value && $value['time'] > $ckTime) {
            $this->definitionCache = $value['gadgets']; // process cache
            return $this->definitionCache;
        }

        // (b) Fetch value from WAN cache or regenerate if needed.
        // This is hit occasionally and more so when the list changes.
        $us = $this;
        $value = $wanCache->getWithSetCallback(
            $key,
            Gadget::CACHE_TTL,
            function ($old, &$ttl) use ($us) {
                $now = microtime(true);
                $gadgets = $us->fetchStructuredList();
                if ($gadgets === false) {
                    $ttl = WANObjectCache::TTL_UNCACHEABLE;
                }

                return array( 'gadgets' => $gadgets, 'time' => $now );
            },
            array( 'checkKeys' => array( $key ), 'lockTSE' => 300 )
        );

        // Update the tier 1 cache as needed
        if ($value['gadgets'] !== false && $value['time'] > $ckTime) {
            // Set a modest TTL to keep the WAN key in cache
            $t1Cache->set($key, $value, mt_rand(300, 600));
        }

        $this->definitionCache = $value['gadgets'];

        return $this->definitionCache;
    }

    /**
     * Fetch list of gadgets and returns it as associative array of sections with gadgets
     * e.g. array( $name => $gadget1, etc. )
     * @param $forceNewText String: Injected text of MediaWiki:gadgets-definition [optional]
     * @return array|bool
     */
    public function fetchStructuredList($forceNewText = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates a structured list of Gadget objects from a definition
     *
     * @param $definition
     * @return array Array( name => Gadget )
     */
    private function listFromDefinition($definition)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates an instance of this class from definition in MediaWiki:Gadgets-definition
     * @param string $definition Gadget definition
     * @param string $category
     * @return Gadget|bool Instance of Gadget class or false if $definition is invalid
     */
    public function newFromDefinition($definition, $category)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
