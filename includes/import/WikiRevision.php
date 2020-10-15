<?php
/**
 * MediaWiki page data importer.
 *
 * Copyright © 2003,2005 Brion Vibber <brion@pobox.com>
 * https://www.mediawiki.org/
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
 * @ingroup SpecialPage
 */

/**
 * Represents a revision, log entry or upload during the import process.
 * This class sticks closely to the structure of the XML dump.
 *
 * @ingroup SpecialPage
 */
class WikiRevision
{
    /** @todo Unused? */
    public $importer = null;

    /** @var Title */
    public $title = null;

    /** @var int */
    public $id = 0;

    /** @var string */
    public $timestamp = "20010115000000";

    /**
     * @var int
     * @todo Can't find any uses. Public, because that's suspicious. Get clarity. */
    public $user = 0;

    /** @var string */
    public $user_text = "";

    /** @var User */
    public $userObj = null;

    /** @var string */
    public $model = null;

    /** @var string */
    public $format = null;

    /** @var string */
    public $text = "";

    /** @var int */
    protected $size;

    /** @var Content */
    public $content = null;

    /** @var ContentHandler */
    protected $contentHandler = null;

    /** @var string */
    public $comment = "";

    /** @var bool */
    public $minor = false;

    /** @var string */
    public $type = "";

    /** @var string */
    public $action = "";

    /** @var string */
    public $params = "";

    /** @var string */
    public $fileSrc = '';

    /** @var bool|string */
    public $sha1base36 = false;

    /**
     * @var bool
     * @todo Unused?
     */
    public $isTemp = false;

    /** @var string */
    public $archiveName = '';

    protected $filename;

    /** @var mixed */
    protected $src;

    /** @todo Unused? */
    public $fileIsTemp;

    /** @var bool */
    private $mNoUpdates = false;

    /** @var Config $config */
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param Title $title
     * @throws MWException
     */
    public function setTitle($title)
    {
        if (is_object($title)) {
            $this->title = $title;
        } elseif (is_null($title)) {
            throw new MWException("WikiRevision given a null title in import. "
                . "You may need to adjust \$wgLegalTitleChars.");
        } else {
            throw new MWException("WikiRevision given non-object title in import.");
        }
    }

    /**
     * @param int $id
     */
    public function setID($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $ts
     */
    public function setTimestamp($ts)
    {
        # 2003-08-05T18:30:02Z
        $this->timestamp = wfTimestamp(TS_MW, $ts);
    }

    /**
     * @param string $user
     */
    public function setUsername($user)
    {
        $this->user_text = $user;
    }

    /**
     * @param User $user
     */
    public function setUserObj($user)
    {
        $this->userObj = $user;
    }

    /**
     * @param string $ip
     */
    public function setUserIP($ip)
    {
        $this->user_text = $ip;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param string $text
     */
    public function setComment($text)
    {
        $this->comment = $text;
    }

    /**
     * @param bool $minor
     */
    public function setMinor($minor)
    {
        $this->minor = (bool)$minor;
    }

    /**
     * @param mixed $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }

    /**
     * @param string $src
     * @param bool $isTemp
     */
    public function setFileSrc($src, $isTemp)
    {
        $this->fileSrc = $src;
        $this->fileIsTemp = $isTemp;
    }

    /**
     * @param string $sha1base36
     */
    public function setSha1Base36($sha1base36)
    {
        $this->sha1base36 = $sha1base36;
    }

    /**
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @param string $archiveName
     */
    public function setArchiveName($archiveName)
    {
        $this->archiveName = $archiveName;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = intval($size);
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @param array $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * @param bool $noupdates
     */
    public function setNoUpdates($noupdates)
    {
        $this->mNoUpdates = $noupdates;
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user_text;
    }

    /**
     * @return User
     */
    public function getUserObj()
    {
        return $this->userObj;
    }

    /**
     * @return string
     *
     * @deprecated Since 1.21, use getContent() instead.
     */
    public function getText()
    {
        wfDeprecated(__METHOD__, '1.21');

        return $this->text;
    }

    /**
     * @return ContentHandler
     */
    public function getContentHandler()
    {
        if (is_null($this->contentHandler)) {
            $this->contentHandler = ContentHandler::getForModelID($this->getModel());
        }

        return $this->contentHandler;
    }

    /**
     * @return Content
     */
    public function getContent()
    {
        if (is_null($this->content)) {
            $handler = $this->getContentHandler();
            $this->content = $handler->unserializeContent($this->text, $this->getFormat());
        }

        return $this->content;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        if (is_null($this->model)) {
            $this->model = $this->getTitle()->getContentModel();
        }

        return $this->model;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        if (is_null($this->format)) {
            $this->format = $this->getContentHandler()->getDefaultFormat();
        }

        return $this->format;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return bool
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * @return mixed
     */
    public function getSrc()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool|string
     */
    public function getSha1()
    {
        if ($this->sha1base36) {
            return Wikimedia\base_convert($this->sha1base36, 36, 16);
        }
        return false;
    }

    /**
     * @return string
     */
    public function getFileSrc()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isTempSrc()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getArchiveName()
    {
        return $this->archiveName;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return bool
     */
    public function importOldRevision()
    {
        $dbw = wfGetDB(DB_MASTER);

        # Sneak a single revision into place
        $user = $this->getUserObj() ?: User::newFromName($this->getUser());
        if ($user) {
            $userId = intval($user->getId());
            $userText = $user->getName();
        } else {
            $userId = 0;
            $userText = $this->getUser();
            $user = new User;
        }

        // avoid memory leak...?
        Title::clearCaches();

        $page = WikiPage::factory($this->title);
        $page->loadPageData('fromdbmaster');
        if (!$page->exists()) {
            // must create the page...
            $pageId = $page->insertOn($dbw);
            $created = true;
            $oldcountable = null;
        } else {
            $pageId = $page->getId();
            $created = false;

            $prior = $dbw->selectField(
                'revision',
                '1',
                [ 'rev_page' => $pageId,
                    'rev_timestamp' => $dbw->timestamp($this->timestamp),
                    'rev_user_text' => $userText,
                    'rev_comment' => $this->getComment() ],
                __METHOD__
            );
            if ($prior) {
                // @todo FIXME: This could fail slightly for multiple matches :P
                wfDebug(__METHOD__ . ": skipping existing revision for [[" .
                    $this->title->getPrefixedText() . "]], timestamp " . $this->timestamp . "\n");
                return false;
            }
        }

        if (!$pageId) {
            // This seems to happen if two clients simultaneously try to import the
            // same page
            wfDebug(__METHOD__ . ': got invalid $pageId when importing revision of [[' .
                $this->title->getPrefixedText() . ']], timestamp ' . $this->timestamp . "\n");
            return false;
        }

        // Select previous version to make size diffs correct
        // @todo This assumes that multiple revisions of the same page are imported
        // in order from oldest to newest.
        $prevId = $dbw->selectField(
            'revision',
            'rev_id',
            [
                'rev_page' => $pageId,
                'rev_timestamp <= ' . $dbw->addQuotes($dbw->timestamp($this->timestamp)),
            ],
            __METHOD__,
            [ 'ORDER BY' => [
                    'rev_timestamp DESC',
                    'rev_id DESC', // timestamp is not unique per page
                ]
            ]
        );

        # @todo FIXME: Use original rev_id optionally (better for backups)
        # Insert the row
        $revision = new Revision([
            'title' => $this->title,
            'page' => $pageId,
            'content_model' => $this->getModel(),
            'content_format' => $this->getFormat(),
            // XXX: just set 'content' => $this->getContent()?
            'text' => $this->getContent()->serialize($this->getFormat()),
            'comment' => $this->getComment(),
            'user' => $userId,
            'user_text' => $userText,
            'timestamp' => $this->timestamp,
            'minor_edit' => $this->minor,
            'parent_id' => $prevId,
            ]);
        $revision->insertOn($dbw);
        $changed = $page->updateIfNewerOn($dbw, $revision);

        if ($changed !== false && !$this->mNoUpdates) {
            wfDebug(__METHOD__ . ": running updates\n");
            // countable/oldcountable stuff is handled in WikiImporter::finishImportPage
            $page->doEditUpdates(
                $revision,
                $user,
                [ 'created' => $created, 'oldcountable' => 'no-change' ]
            );
        }

        return true;
    }

    public function importLogItem()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function importUpload()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool|string
     */
    public function downloadSource()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
