<?php
/**
 * Functions and constants to deal with grants
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
 */

/**
 * A collection of public static functions to deal with grants.
 */
class MWGrants
{

    /**
     * List all known grants.
     * @return array
     */
    public static function getValidGrants()
    {
        global $wgGrantPermissions;

        return array_keys($wgGrantPermissions);
    }

    /**
     * Map all grants to corresponding user rights.
     * @return array grant => array of rights
     */
    public static function getRightsByGrant()
    {
        global $wgGrantPermissions;

        $res = [];
        foreach ($wgGrantPermissions as $grant => $rights) {
            $res[$grant] = array_keys(array_filter($rights));
        }
        return $res;
    }

    /**
     * Fetch the display name of the grant
     * @param string $grant
     * @param Language|string|null $lang
     * @return string Grant description
     */
    public static function grantName($grant, $lang = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Fetch the display names for the grants.
     * @param string[] $grants
     * @param Language|string|null $lang
     * @return string[] Corresponding grant descriptions
     */
    public static function grantNames(array $grants, $lang = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Fetch the rights allowed by a set of grants.
     * @param string[]|string $grants
     * @return string[]
     */
    public static function getGrantRights($grants)
    {
        global $wgGrantPermissions;

        $rights = [];
        foreach ((array)$grants as $grant) {
            if (isset($wgGrantPermissions[$grant])) {
                $rights = array_merge($rights, array_keys(array_filter($wgGrantPermissions[$grant])));
            }
        }
        return array_unique($rights);
    }

    /**
     * Test that all grants in the list are known.
     * @param string[] $grants
     * @return bool
     */
    public static function grantsAreValid(array $grants)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Divide the grants into groups.
     * @param string[]|null $grantsFilter
     * @return array Map of (group => (grant list))
     */
    public static function getGrantGroups($grantsFilter = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the list of grants that are hidden and should always be granted
     * @return string[]
     */
    public static function getHiddenGrants()
    {
        global $wgGrantPermissionGroups;

        $grants = [];
        foreach ($wgGrantPermissionGroups as $grant => $group) {
            if ($group === 'hidden') {
                $grants[] = $grant;
            }
        }
        return $grants;
    }

    /**
     * Generate a link to Special:ListGrants for a particular grant name.
     *
     * This should be used to link end users to a full description of what
     * rights they are giving when they authorize a grant.
     *
     * @param string $grant the grant name
     * @param Language|string|null $lang
     * @return string (proto-relative) HTML link
     */
    public static function getGrantsLink($grant, $lang = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate wikitext to display a list of grants
     * @param string[]|null $grantsFilter If non-null, only display these grants.
     * @param Language|string|null $lang
     * @return string Wikitext
     */
    public static function getGrantsWikiText($grantsFilter, $lang = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
