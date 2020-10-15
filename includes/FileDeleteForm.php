<?php
/**
 * File deletion user interface.
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
 * @author Rob Church <robchur@gmail.com>
 * @ingroup Media
 */

/**
 * File deletion user interface
 *
 * @ingroup Media
 */
class FileDeleteForm
{

    /**
     * @var Title
     */
    private $title = null;

    /**
     * @var File
     */
    private $file = null;

    /**
     * @var File
     */
    private $oldfile = null;
    private $oldimage = '';

    /**
     * Constructor
     *
     * @param File $file File object we're deleting
     */
    public function __construct($file)
    {
        $this->title = $file->getTitle();
        $this->file = $file;
    }

    /**
     * Fulfil the request; shows the form or deletes the file,
     * pending authentication, confirmation, etc.
     */
    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Really delete the file
     *
     * @param Title $title
     * @param File $file
     * @param string $oldimage Archive name
     * @param string $reason Reason of the deletion
     * @param bool $suppress Whether to mark all deleted versions as restricted
     * @param User $user User object performing the request
     * @param array $tags Tags to apply to the deletion action
     * @throws MWException
     * @return bool|Status
     */
    public static function doDelete(
        &$title,
        &$file,
        &$oldimage,
        $reason,
        $suppress,
        User $user = null,
        $tags = []
    ) {
        if ($user === null) {
            global $wgUser;
            $user = $wgUser;
        }

        if ($oldimage) {
            $page = null;
            $status = $file->deleteOld($oldimage, $reason, $suppress, $user);
            if ($status->ok) {
                // Need to do a log item
                $logComment = wfMessage('deletedrevision', $oldimage)->inContentLanguage()->text();
                if (trim($reason) != '') {
                    $logComment .= wfMessage('colon-separator')
                        ->inContentLanguage()->text() . $reason;
                }

                $logtype = $suppress ? 'suppress' : 'delete';

                $logEntry = new ManualLogEntry($logtype, 'delete');
                $logEntry->setPerformer($user);
                $logEntry->setTarget($title);
                $logEntry->setComment($logComment);
                $logEntry->setTags($tags);
                $logid = $logEntry->insert();
                $logEntry->publish($logid);

                $status->value = $logid;
            }
        } else {
            $status = Status::newFatal(
                'cannotdelete',
                wfEscapeWikiText($title->getPrefixedText())
            );
            $page = WikiPage::factory($title);
            $dbw = wfGetDB(DB_MASTER);
            $dbw->startAtomic(__METHOD__);
            // delete the associated article first
            $error = '';
            $deleteStatus = $page->doDeleteArticleReal(
                $reason,
                $suppress,
                0,
                false,
                $error,
                $user,
                $tags
            );
            // doDeleteArticleReal() returns a non-fatal error status if the page
            // or revision is missing, so check for isOK() rather than isGood()
            if ($deleteStatus->isOK()) {
                $status = $file->delete($reason, $suppress, $user);
                if ($status->isOK()) {
                    $status->value = $deleteStatus->value; // log id
                    $dbw->endAtomic(__METHOD__);
                } else {
                    // Page deleted but file still there? rollback page delete
                    wfGetLBFactory()->rollbackMasterChanges(__METHOD__);
                }
            } else {
                // Done; nothing changed
                $dbw->endAtomic(__METHOD__);
            }
        }

        if ($status->isOK()) {
            Hooks::run('FileDeleteComplete', [ &$file, &$oldimage, &$page, &$user, &$reason ]);
        }

        return $status;
    }

    /**
     * Show the confirmation form
     */
    private function showForm()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Show deletion log fragments pertaining to the current file
     */
    private function showLogEntries()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepare a message referring to the file being deleted,
     * showing an appropriate message depending upon whether
     * it's a current file or an old version
     *
     * @param string $message Message base
     * @return string
     */
    private function prepareMessage($message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set headers, titles and other bits
     */
    private function setHeaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Is the provided `oldimage` value valid?
     *
     * @param string $oldimage
     * @return bool
     */
    public static function isValidOldSpec($oldimage)
    {
        return strlen($oldimage) >= 16
            && strpos($oldimage, '/') === false
            && strpos($oldimage, '\\') === false;
    }

    /**
     * Could we delete the file specified? If an `oldimage`
     * value was provided, does it correspond to an
     * existing, local, old version of this file?
     *
     * @param File $file
     * @param File $oldfile
     * @param File $oldimage
     * @return bool
     */
    public static function haveDeletableFile(&$file, &$oldfile, $oldimage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepare the form action
     *
     * @return string
     */
    private function getAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extract the timestamp of the old version
     *
     * @return string
     */
    private function getTimestamp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
