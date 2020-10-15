<?php
/**
 * Cache of various elements in a single cache entry.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @license GNU GPL v2 or later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

/**
 * Interface for all classes implementing CacheHelper functionality.
 *
 * @since 1.20
 */
interface ICacheHelper
{
    /**
     * Sets if the cache should be enabled or not.
     *
     * @since 1.20
     * @param bool $cacheEnabled
     */
    public function setCacheEnabled($cacheEnabled);

    /**
     * Initializes the caching.
     * Should be called before the first time anything is added via addCachedHTML.
     *
     * @since 1.20
     *
     * @param int|null $cacheExpiry Sets the cache expiry, either ttl in seconds or unix timestamp.
     * @param bool|null $cacheEnabled Sets if the cache should be enabled or not.
     */
    public function startCache($cacheExpiry = null, $cacheEnabled = null);

    /**
     * Get a cached value if available or compute it if not and then cache it if possible.
     * The provided $computeFunction is only called when the computation needs to happen
     * and should return a result value. $args are arguments that will be passed to the
     * compute function when called.
     *
     * @since 1.20
     *
     * @param callable $computeFunction
     * @param array|mixed $args
     * @param string|null $key
     *
     * @return mixed
     */
    public function getCachedValue($computeFunction, $args = [], $key = null);

    /**
     * Saves the HTML to the cache in case it got recomputed.
     * Should be called after the last time anything is added via addCachedHTML.
     *
     * @since 1.20
     */
    public function saveCache();

    /**
     * Sets the time to live for the cache, in seconds or a unix timestamp
     * indicating the point of expiry...
     *
     * @since 1.20
     *
     * @param int $cacheExpiry
     */
    public function setExpiry($cacheExpiry);
}

/**
 * Helper class for caching various elements in a single cache entry.
 *
 * To get a cached value or compute it, use getCachedValue like this:
 * $this->getCachedValue( $callback );
 *
 * To add HTML that should be cached, use addCachedHTML like this:
 * $this->addCachedHTML( $callback );
 *
 * The callback function is only called when needed, so do all your expensive
 * computations here. This function should returns the HTML to be cached.
 * It should not add anything to the PageOutput object!
 *
 * Before the first addCachedHTML call, you should call $this->startCache();
 * After adding the last HTML that should be cached, call $this->saveCache();
 *
 * @since 1.20
 */
class CacheHelper implements ICacheHelper
{
    /**
     * The time to live for the cache, in seconds or a unix timestamp indicating the point of expiry.
     *
     * @since 1.20
     * @var int
     */
    protected $cacheExpiry = 3600;

    /**
     * List of HTML chunks to be cached (if !hasCached) or that where cached (of hasCached).
     * If not cached already, then the newly computed chunks are added here,
     * if it as cached already, chunks are removed from this list as they are needed.
     *
     * @since 1.20
     * @var array
     */
    protected $cachedChunks;

    /**
     * Indicates if the to be cached content was already cached.
     * Null if this information is not available yet.
     *
     * @since 1.20
     * @var bool|null
     */
    protected $hasCached = null;

    /**
     * If the cache is enabled or not.
     *
     * @since 1.20
     * @var bool
     */
    protected $cacheEnabled = true;

    /**
     * Function that gets called when initialization is done.
     *
     * @since 1.20
     * @var callable
     */
    protected $onInitHandler = false;

    /**
     * Elements to build a cache key with.
     *
     * @since 1.20
     * @var array
     */
    protected $cacheKey = [];

    /**
     * Sets if the cache should be enabled or not.
     *
     * @since 1.20
     * @param bool $cacheEnabled
     */
    public function setCacheEnabled($cacheEnabled)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Initializes the caching.
     * Should be called before the first time anything is added via addCachedHTML.
     *
     * @since 1.20
     *
     * @param int|null $cacheExpiry Sets the cache expiry, either ttl in seconds or unix timestamp.
     * @param bool|null $cacheEnabled Sets if the cache should be enabled or not.
     */
    public function startCache($cacheExpiry = null, $cacheEnabled = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a message that notifies the user he/she is looking at
     * a cached version of the page, including a refresh link.
     *
     * @since 1.20
     *
     * @param IContextSource $context
     * @param bool $includePurgeLink
     *
     * @return string
     */
    public function getCachedNotice(IContextSource $context, $includePurgeLink = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Initializes the caching if not already done so.
     * Should be called before any of the caching functionality is used.
     *
     * @since 1.20
     */
    protected function initCaching()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a cached value if available or compute it if not and then cache it if possible.
     * The provided $computeFunction is only called when the computation needs to happen
     * and should return a result value. $args are arguments that will be passed to the
     * compute function when called.
     *
     * @since 1.20
     *
     * @param callable $computeFunction
     * @param array|mixed $args
     * @param string|null $key
     *
     * @return mixed
     */
    public function getCachedValue($computeFunction, $args = [], $key = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves the HTML to the cache in case it got recomputed.
     * Should be called after the last time anything is added via addCachedHTML.
     *
     * @since 1.20
     */
    public function saveCache()
    {
        if ($this->cacheEnabled && $this->hasCached === false && !empty($this->cachedChunks)) {
            wfGetCache(CACHE_ANYTHING)->set(
                $this->getCacheKeyString(),
                $this->cachedChunks,
                $this->cacheExpiry
            );
        }
    }

    /**
     * Sets the time to live for the cache, in seconds or a unix timestamp
     * indicating the point of expiry...
     *
     * @since 1.20
     *
     * @param int $cacheExpiry
     */
    public function setExpiry($cacheExpiry)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the cache key to use to cache this page's HTML output.
     * Is constructed from the special page name and language code.
     *
     * @since 1.20
     *
     * @return string
     * @throws MWException
     */
    protected function getCacheKeyString()
    {
        if ($this->cacheKey === []) {
            throw new MWException('No cache key set, so cannot obtain or save the CacheHelper values.');
        }

        return call_user_func_array('wfMemcKey', $this->cacheKey);
    }

    /**
     * Sets the cache key that should be used.
     *
     * @since 1.20
     *
     * @param array $cacheKey
     */
    public function setCacheKey(array $cacheKey)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Rebuild the content, even if it's already cached.
     * This effectively has the same effect as purging the cache,
     * since it will be overridden with the new value on the next request.
     *
     * @since 1.20
     */
    public function rebuildOnDemand()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a function that gets called when initialization of the cache is done.
     *
     * @since 1.20
     *
     * @param callable $handlerFunction
     */
    public function setOnInitializedHandler($handlerFunction)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
