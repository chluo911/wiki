<?php
/**
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
 * @ingroup Watchlist
 */
use MediaWiki\MediaWikiServices;
use MediaWiki\Linker\LinkTarget;

/**
 * Representation of a pair of user and title for watchlist entries.
 *
 * @author Tim Starling
 * @author Addshore
 *
 * @ingroup Watchlist
 */
class WatchedItem
{

    /**
     * @deprecated since 1.27, see User::IGNORE_USER_RIGHTS
     */
    const IGNORE_USER_RIGHTS = User::IGNORE_USER_RIGHTS;

    /**
     * @deprecated since 1.27, see User::CHECK_USER_RIGHTS
     */
    const CHECK_USER_RIGHTS = User::CHECK_USER_RIGHTS;

    /**
     * @deprecated Internal class use only
     */
    const DEPRECATED_USAGE_TIMESTAMP = -100;

    /**
     * @var bool
     * @deprecated Internal class use only
     */
    public $checkRights = User::CHECK_USER_RIGHTS;

    /**
     * @var Title
     * @deprecated Internal class use only
     */
    private $title;

    /**
     * @var LinkTarget
     */
    private $linkTarget;

    /**
     * @var User
     */
    private $user;

    /**
     * @var null|string the value of the wl_notificationtimestamp field
     */
    private $notificationTimestamp;

    /**
     * @param User $user
     * @param LinkTarget $linkTarget
     * @param null|string $notificationTimestamp the value of the wl_notificationtimestamp field
     * @param bool|null $checkRights DO NOT USE - used internally for backward compatibility
     */
    public function __construct(
        User $user,
        LinkTarget $linkTarget,
        $notificationTimestamp,
        $checkRights = null
    ) {
        $this->user = $user;
        $this->linkTarget = $linkTarget;
        $this->notificationTimestamp = $notificationTimestamp;
        if ($checkRights !== null) {
            $this->checkRights = $checkRights;
        }
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return LinkTarget
     */
    public function getLinkTarget()
    {
        return $this->linkTarget;
    }

    /**
     * Get the notification timestamp of this entry.
     *
     * @return bool|null|string
     */
    public function getNotificationTimestamp()
    {
        // Back compat for objects constructed using self::fromUserTitle
        if ($this->notificationTimestamp === self::DEPRECATED_USAGE_TIMESTAMP) {
            // wfDeprecated( __METHOD__, '1.27' );
            if ($this->checkRights && !$this->user->isAllowed('viewmywatchlist')) {
                return false;
            }
            $item = MediaWikiServices::getInstance()->getWatchedItemStore()
                ->loadWatchedItem($this->user, $this->linkTarget);
            if ($item) {
                $this->notificationTimestamp = $item->getNotificationTimestamp();
            } else {
                $this->notificationTimestamp = false;
            }
        }
        return $this->notificationTimestamp;
    }

    /**
     * Back compat pre 1.27 with the WatchedItemStore introduction
     * @todo remove in 1.28/9
     * -------------------------------------------------
     */

    /**
     * @return Title
     * @deprecated Internal class use only
     */
    public function getTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated since 1.27 Use the constructor, WatchedItemStore::getWatchedItem()
     *             or WatchedItemStore::loadWatchedItem()
     */
    public static function fromUserTitle($user, $title, $checkRights = User::CHECK_USER_RIGHTS)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated since 1.27 Use User::addWatch()
     * @return bool
     */
    public function addWatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated since 1.27 Use User::removeWatch()
     * @return bool
     */
    public function removeWatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated since 1.27 Use User::isWatched()
     * @return bool
     */
    public function isWatched()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated since 1.27 Use WatchedItemStore::duplicateAllAssociatedEntries()
     */
    public static function duplicateEntries(Title $oldTitle, Title $newTitle)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
