<?php
/**
 * Foreign file with an accessible MediaWiki database.
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
 * @ingroup FileAbstraction
 */

/**
 * Foreign file with an accessible MediaWiki database
 *
 * @ingroup FileAbstraction
 */
class ForeignDBFile extends LocalFile
{
    /**
     * @param Title $title
     * @param FileRepo $repo
     * @param null $unused
     * @return ForeignDBFile
     */
    public static function newFromTitle($title, $repo, $unused = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a ForeignDBFile from a title
     * Do not call this except from inside a repo class.
     *
     * @param stdClass $row
     * @param FileRepo $repo
     * @return ForeignDBFile
     */
    public static function newFromRow($row, $repo)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $srcPath
     * @param int $flags
     * @param array $options
     * @return Status
     * @throws MWException
     */
    public function publish($srcPath, $flags = 0, array $options = [])
    {
        $this->readOnlyError();
    }

    /**
     * @param string $oldver
     * @param string $desc
     * @param string $license
     * @param string $copyStatus
     * @param string $source
     * @param bool $watch
     * @param bool|string $timestamp
     * @param User $user User object or null to use $wgUser
     * @return bool
     * @throws MWException
     */
    public function recordUpload(
        $oldver,
        $desc,
        $license = '',
        $copyStatus = '',
        $source = '',
        $watch = false,
        $timestamp = false,
        User $user = null
    )
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $versions
     * @param bool $unsuppress
     * @return Status
     * @throws MWException
     */
    public function restore($versions = [], $unsuppress = false)
    {
        $this->readOnlyError();
    }

    /**
     * @param string $reason
     * @param bool $suppress
     * @param User|null $user
     * @return Status
     * @throws MWException
     */
    public function delete($reason, $suppress = false, $user = null)
    {
        $this->readOnlyError();
    }

    /**
     * @param Title $target
     * @return Status
     * @throws MWException
     */
    public function move($target)
    {
        $this->readOnlyError();
    }

    /**
     * @return string
     */
    public function getDescriptionUrl()
    {
        // Restore remote behavior
        return File::getDescriptionUrl();
    }

    /**
     * @param bool|Language $lang Optional language to fetch description in.
     * @return string
     */
    public function getDescriptionText($lang = false)
    {
        global $wgLang;

        if (!$this->repo->fetchDescription) {
            return false;
        }

        $lang = $lang ?: $wgLang;
        $renderUrl = $this->repo->getDescriptionRenderUrl($this->getName(), $lang->getCode());
        if (!$renderUrl) {
            return false;
        }

        $touched = $this->repo->getSlaveDB()->selectField(
            'page',
            'page_touched',
            [
                'page_namespace' => NS_FILE,
                'page_title' => $this->title->getDBkey()
            ]
        );
        if ($touched === false) {
            return false; // no description page
        }

        $cache = ObjectCache::getMainWANInstance();

        return $cache->getWithSetCallback(
            $this->repo->getLocalCacheKey(
                'RemoteFileDescription',
                'url',
                $lang->getCode(),
                $this->getName(),
                $touched
            ),
            $this->repo->descriptionCacheExpiry ?: $cache::TTL_UNCACHEABLE,
            function ($oldValue, &$ttl, array &$setOpts) use ($renderUrl) {
                wfDebug("Fetching shared description from $renderUrl\n");
                $res = Http::get($renderUrl, [], __METHOD__);
                if (!$res) {
                    $ttl = WANObjectCache::TTL_UNCACHEABLE;
                }

                return $res;
            }
        );
    }

    /**
     * Get short description URL for a file based on the page ID.
     *
     * @return string
     * @throws DBUnexpectedError
     * @since 1.27
     */
    public function getDescriptionShortUrl()
    {
        $dbr = $this->repo->getSlaveDB();
        $pageId = $dbr->selectField(
            'page',
            'page_id',
            [
                'page_namespace' => NS_FILE,
                'page_title' => $this->title->getDBkey()
            ]
        );

        if ($pageId !== false) {
            $url = $this->repo->makeUrl([ 'curid' => $pageId ]);
            if ($url !== false) {
                return $url;
            }
        }
        return null;
    }
}
