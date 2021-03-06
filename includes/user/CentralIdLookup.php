<?php
/**
 * A central user id lookup service
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
 */

/**
 * The CentralIdLookup service allows for connecting local users with
 * cluster-wide IDs.
 *
 * @since 1.27
 */
abstract class CentralIdLookup implements IDBAccessObject
{
    // Audience options for accessors
    const AUDIENCE_PUBLIC = 1;
    const AUDIENCE_RAW = 2;

    /** @var CentralIdLookup[] */
    private static $instances = [];

    /** @var string */
    private $providerId;

    /**
     * Fetch a CentralIdLookup
     * @param string|null $providerId Provider ID from $wgCentralIdLookupProviders
     * @return CentralIdLookup|null
     */
    public static function factory($providerId = null)
    {
        global $wgCentralIdLookupProviders, $wgCentralIdLookupProvider;

        if ($providerId === null) {
            $providerId = $wgCentralIdLookupProvider;
        }

        if (!array_key_exists($providerId, self::$instances)) {
            self::$instances[$providerId] = null;

            if (isset($wgCentralIdLookupProviders[$providerId])) {
                $provider = ObjectFactory::getObjectFromSpec($wgCentralIdLookupProviders[$providerId]);
                if ($provider instanceof CentralIdLookup) {
                    $provider->providerId = $providerId;
                    self::$instances[$providerId] = $provider;
                }
            }
        }

        return self::$instances[$providerId];
    }

    /**
     * Reset internal cache for unit testing
     */
    public static function resetCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    final public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Check that the "audience" parameter is valid
     * @param int|User $audience One of the audience constants, or a specific user
     * @return User|null User to check against, or null if no checks are needed
     * @throws InvalidArgumentException
     */
    protected function checkAudience($audience)
    {
        if ($audience instanceof User) {
            return $audience;
        }
        if ($audience === self::AUDIENCE_PUBLIC) {
            return new User;
        }
        if ($audience === self::AUDIENCE_RAW) {
            return null;
        }
        throw new InvalidArgumentException('Invalid audience');
    }

    /**
     * Check that a User is attached on the specified wiki.
     *
     * If unattached local accounts don't exist in your extension, this comes
     * down to a check whether the central account exists at all and that
     * $wikiId is using the same central database.
     *
     * @param User $user
     * @param string|null $wikiId Wiki to check attachment status. If null, check the current wiki.
     * @return bool
     */
    abstract public function isAttached(User $user, $wikiId = null);

    /**
     * Given central user IDs, return the (local) user names
     * @note There's no requirement that the user names actually exist locally,
     *  or if they do that they're actually attached to the central account.
     * @param array $idToName Array with keys being central user IDs
     * @param int|User $audience One of the audience constants, or a specific user
     * @param int $flags IDBAccessObject read flags
     * @return array Copy of $idToName with values set to user names (or
     *  empty-string if the user exists but $audience lacks the rights needed
     *  to see it). IDs not corresponding to a user are unchanged.
     */
    abstract public function lookupCentralIds(
        array $idToName,
        $audience = self::AUDIENCE_PUBLIC,
        $flags = self::READ_NORMAL
    );

    /**
     * Given (local) user names, return the central IDs
     * @note There's no requirement that the user names actually exist locally,
     *  or if they do that they're actually attached to the central account.
     * @param array $nameToId Array with keys being canonicalized user names
     * @param int|User $audience One of the audience constants, or a specific user
     * @param int $flags IDBAccessObject read flags
     * @return array Copy of $nameToId with values set to central IDs.
     *  Names not corresponding to a user (or $audience lacks the rights needed
     *  to see it) are unchanged.
     */
    abstract public function lookupUserNames(
        array $nameToId,
        $audience = self::AUDIENCE_PUBLIC,
        $flags = self::READ_NORMAL
    );

    /**
     * Given a central user ID, return the (local) user name
     * @note There's no requirement that the user name actually exists locally,
     *  or if it does that it's actually attached to the central account.
     * @param int $id Central user ID
     * @param int|User $audience One of the audience constants, or a specific user
     * @param int $flags IDBAccessObject read flags
     * @return string|null User name, or empty string if $audience lacks the
     *  rights needed to see it, or null if $id doesn't correspond to a user
     */
    public function nameFromCentralId(
        $id,
        $audience = self::AUDIENCE_PUBLIC,
        $flags = self::READ_NORMAL
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a (local) user name, return the central ID
     * @note There's no requirement that the user name actually exists locally,
     *  or if it does that it's actually attached to the central account.
     * @param string $name Canonicalized user name
     * @param int|User $audience One of the audience constants, or a specific user
     * @param int $flags IDBAccessObject read flags
     * @return int User ID; 0 if the name does not correspond to a user or
     *  $audience lacks the rights needed to see it.
     */
    public function centralIdFromName(
        $name,
        $audience = self::AUDIENCE_PUBLIC,
        $flags = self::READ_NORMAL
    ) {
        $nameToId = $this->lookupUserNames([ $name => 0 ], $audience, $flags);
        return $nameToId[$name];
    }

    /**
     * Given a central user ID, return a local User object
     * @note Unlike nameFromCentralId(), this does guarantee that the local
     *  user exists and is attached to the central account.
     * @param int $id Central user ID
     * @param int|User $audience One of the audience constants, or a specific user
     * @param int $flags IDBAccessObject read flags
     * @return User|null Local user, or null if: $id doesn't correspond to a
     *  user, $audience lacks the rights needed to see the user, the user
     *  doesn't exist locally, or the user isn't locally attached.
     */
    public function localUserFromCentralId(
        $id,
        $audience = self::AUDIENCE_PUBLIC,
        $flags = self::READ_NORMAL
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Given a local User object, return the central ID
     * @note Unlike centralIdFromName(), this does guarantee that the local
     *  user is attached to the central account.
     * @param User $user Local user
     * @param int|User $audience One of the audience constants, or a specific user
     * @param int $flags IDBAccessObject read flags
     * @return int User ID; 0 if the local user does not correspond to a
     *  central user, $audience lacks the rights needed to see it, or the
     *  central user isn't locally attached.
     */
    public function centralIdFromLocalUser(
        User $user,
        $audience = self::AUDIENCE_PUBLIC,
        $flags = self::READ_NORMAL
    ) {
        return $this->isAttached($user)
            ? $this->centralIdFromName($user->getName(), $audience, $flags)
            : 0;
    }
}
