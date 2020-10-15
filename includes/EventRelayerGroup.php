<?php
use MediaWiki\MediaWikiServices;

/**
 * Factory class for spawning EventRelayer objects using configuration
 *
 * @author Aaron Schulz
 * @since 1.27
 */
class EventRelayerGroup
{
    /** @var array[] */
    protected $configByChannel = [];

    /** @var EventRelayer[] */
    protected $relayers = [];

    /**
     * @param array[] $config Channel configuration
     */
    public function __construct(array $config)
    {
        $this->configByChannel = $config;
    }

    /**
     * @deprecated since 1.27 Use MediaWikiServices::getInstance()->getEventRelayerGroup()
     * @return EventRelayerGroup
     */
    public static function singleton()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $channel
     * @return EventRelayer Relayer instance that handles the given channel
     */
    public function getRelayer($channel)
    {
        $channelKey = isset($this->configByChannel[$channel])
            ? $channel
            : 'default';

        if (!isset($this->relayers[$channelKey])) {
            if (!isset($this->configByChannel[$channelKey])) {
                throw new UnexpectedValueException("No config for '$channelKey'");
            }

            $config = $this->configByChannel[$channelKey];
            $class = $config['class'];

            $this->relayers[$channelKey] = new $class($config);
        }

        return $this->relayers[$channelKey];
    }
}
