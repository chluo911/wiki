<?php
/**
 * Old file in the oldimage table.
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
 * Class to represent a file in the oldimage table
 *
 * @ingroup FileAbstraction
 */
class OldLocalFile extends LocalFile
{
    /** @var string Timestamp */
    protected $requestedTime;

    /** @var string Archive name */
    protected $archive_name;

    const CACHE_VERSION = 1;
    const MAX_CACHE_ROWS = 20;

    /**
     * @param Title $title
     * @param FileRepo $repo
     * @param null|int $time Timestamp or null
     * @return OldLocalFile
     * @throws MWException
     */
    public static function newFromTitle($title, $repo, $time = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Title $title
     * @param FileRepo $repo
     * @param string $archiveName
     * @return OldLocalFile
     */
    public static function newFromArchiveName($title, $repo, $archiveName)
    {
        return new self($title, $repo, null, $archiveName);
    }

    /**
     * @param stdClass $row
     * @param FileRepo $repo
     * @return OldLocalFile
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
     * Create a OldLocalFile from a SHA-1 key
     * Do not call this except from inside a repo class.
     *
     * @param string $sha1 Base-36 SHA-1
     * @param LocalRepo $repo
     * @param string|bool $timestamp MW_timestamp (optional)
     *
     * @return bool|OldLocalFile
     */
    public static function newFromKey($sha1, $repo, $timestamp = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Fields in the oldimage table
     * @return array
     */
    public static function selectFields()
    {
        return [
            'oi_name',
            'oi_archive_name',
            'oi_size',
            'oi_width',
            'oi_height',
            'oi_metadata',
            'oi_bits',
            'oi_media_type',
            'oi_major_mime',
            'oi_minor_mime',
            'oi_description',
            'oi_user',
            'oi_user_text',
            'oi_timestamp',
            'oi_deleted',
            'oi_sha1',
        ];
    }

    /**
     * @param Title $title
     * @param FileRepo $repo
     * @param string $time Timestamp or null to load by archive name
     * @param string $archiveName Archive name or null to load by timestamp
     * @throws MWException
     */
    public function __construct($title, $repo, $time, $archiveName)
    {
        parent::__construct($title, $repo);
        $this->requestedTime = $time;
        $this->archive_name = $archiveName;
        if (is_null($time) && is_null($archiveName)) {
            throw new MWException(__METHOD__ . ': must specify at least one of $time or $archiveName');
        }
    }

    /**
     * @return bool
     */
    public function getCacheKey()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getArchiveName()
    {
        if (!isset($this->archive_name)) {
            $this->load();
        }

        return $this->archive_name;
    }

    /**
     * @return bool
     */
    public function isOld()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isVisible()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function loadFromDB($flags = 0)
    {
        $this->dataLoaded = true;

        $dbr = ($flags & self::READ_LATEST)
            ? $this->repo->getMasterDB()
            : $this->repo->getSlaveDB();

        $conds = [ 'oi_name' => $this->getName() ];
        if (is_null($this->requestedTime)) {
            $conds['oi_archive_name'] = $this->archive_name;
        } else {
            $conds['oi_timestamp'] = $dbr->timestamp($this->requestedTime);
        }
        $row = $dbr->selectRow(
            'oldimage',
            $this->getCacheFields('oi_'),
            $conds,
            __METHOD__,
            [ 'ORDER BY' => 'oi_timestamp DESC' ]
        );
        if ($row) {
            $this->loadFromRow($row, 'oi_');
        } else {
            $this->fileExists = false;
        }
    }

    /**
     * Load lazy file metadata from the DB
     */
    protected function loadExtraFromDB()
    {
        $this->extraDataLoaded = true;
        $dbr = $this->repo->getSlaveDB();
        $conds = [ 'oi_name' => $this->getName() ];
        if (is_null($this->requestedTime)) {
            $conds['oi_archive_name'] = $this->archive_name;
        } else {
            $conds['oi_timestamp'] = $dbr->timestamp($this->requestedTime);
        }
        // In theory the file could have just been renamed/deleted...oh well
        $row = $dbr->selectRow(
            'oldimage',
            $this->getLazyCacheFields('oi_'),
            $conds,
            __METHOD__,
            [ 'ORDER BY' => 'oi_timestamp DESC' ]
        );

        if (!$row) { // fallback to master
            $dbr = $this->repo->getMasterDB();
            $row = $dbr->selectRow(
                'oldimage',
                $this->getLazyCacheFields('oi_'),
                $conds,
                __METHOD__,
                [ 'ORDER BY' => 'oi_timestamp DESC' ]
            );
        }

        if ($row) {
            foreach ($this->unprefixRow($row, 'oi_') as $name => $value) {
                $this->$name = $value;
            }
        } else {
            throw new MWException("Could not find data for image '{$this->archive_name}'.");
        }
    }

    /**
     * @param string $prefix
     * @return array
     */
    public function getCacheFields($prefix = 'img_')
    {
        $fields = parent::getCacheFields($prefix);
        $fields[] = $prefix . 'archive_name';
        $fields[] = $prefix . 'deleted';

        return $fields;
    }

    /**
     * @return string
     */
    public function getRel()
    {
        return 'archive/' . $this->getHashPath() . $this->getArchiveName();
    }

    /**
     * @return string
     */
    public function getUrlRel()
    {
        return 'archive/' . $this->getHashPath() . rawurlencode($this->getArchiveName());
    }

    public function upgradeRow()
    {
        $this->loadFromFile();

        # Don't destroy file info of missing files
        if (!$this->fileExists) {
            wfDebug(__METHOD__ . ": file does not exist, aborting\n");

            return;
        }

        $dbw = $this->repo->getMasterDB();
        list($major, $minor) = self::splitMime($this->mime);

        wfDebug(__METHOD__ . ': upgrading ' . $this->archive_name . " to the current schema\n");
        $dbw->update(
            'oldimage',
            [
                'oi_size' => $this->size, // sanity
                'oi_width' => $this->width,
                'oi_height' => $this->height,
                'oi_bits' => $this->bits,
                'oi_media_type' => $this->media_type,
                'oi_major_mime' => $major,
                'oi_minor_mime' => $minor,
                'oi_metadata' => $this->metadata,
                'oi_sha1' => $this->sha1,
            ],
            [
                'oi_name' => $this->getName(),
                'oi_archive_name' => $this->archive_name ],
            __METHOD__
        );
    }

    /**
     * @param int $field One of DELETED_* bitfield constants for file or
     *   revision rows
     * @return bool
     */
    public function isDeleted($field)
    {
        $this->load();

        return ($this->deleted & $field) == $field;
    }

    /**
     * Returns bitfield value
     * @return int
     */
    public function getVisibility()
    {
        $this->load();

        return (int)$this->deleted;
    }

    /**
     * Determine if the current user is allowed to view a particular
     * field of this image file, if it's marked as deleted.
     *
     * @param int $field
     * @param User|null $user User object to check, or null to use $wgUser
     * @return bool
     */
    public function userCan($field, User $user = null)
    {
        $this->load();

        return Revision::userCanBitfield($this->deleted, $field, $user);
    }

    /**
     * Upload a file directly into archive. Generally for Special:Import.
     *
     * @param string $srcPath File system path of the source file
     * @param string $archiveName Full archive name of the file, in the form
     *   $timestamp!$filename, where $filename must match $this->getName()
     * @param string $timestamp
     * @param string $comment
     * @param User $user
     * @return Status
     */
    public function uploadOld($srcPath, $archiveName, $timestamp, $comment, $user)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Record a file upload in the oldimage table, without adding log entries.
     *
     * @param string $srcPath File system path to the source file
     * @param string $archiveName The archive name of the file
     * @param string $timestamp
     * @param string $comment Upload comment
     * @param User $user User who did this upload
     * @return bool
     */
    protected function recordOldUpload($srcPath, $archiveName, $timestamp, $comment, $user)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If archive name is an empty string, then file does not "exist"
     *
     * This is the case for a couple files on Wikimedia servers where
     * the old version is "lost".
     */
    public function exists()
    {
        $archiveName = $this->getArchiveName();
        if ($archiveName === '' || !is_string($archiveName)) {
            return false;
        }
        return parent::exists();
    }
}
