<?php
/**
 * Formatter for delete log entries.
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
 * @author Niklas Laxström
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @since 1.22
 */

/**
 * This class formats delete log entries.
 *
 * @since 1.19
 */
class DeleteLogFormatter extends LogFormatter
{
    protected function getMessageKey()
    {
        $key = parent::getMessageKey();
        if (in_array($this->entry->getSubtype(), [ 'event', 'revision' ])) {
            if (count($this->getMessageParameters()) < 5) {
                // Messages: logentry-delete-event-legacy, logentry-delete-revision-legacy,
                // logentry-suppress-event-legacy, logentry-suppress-revision-legacy
                return "$key-legacy";
            }
        }

        return $key;
    }

    protected function getMessageParameters()
    {
        if (isset($this->parsedParametersDeleteLog)) {
            return $this->parsedParametersDeleteLog;
        }

        $params = parent::getMessageParameters();
        $subtype = $this->entry->getSubtype();
        if (in_array($subtype, [ 'event', 'revision' ])) {
            // $params[3] here is 'revision' or 'archive' for page revisions, 'oldimage' or
            // 'filearchive' for file versions, or a comma-separated list of log_ids for log
            // entries. $subtype here is 'revision' for page revisions and file
            // versions, or 'event' for log entries.
            if (
                ($subtype === 'event' && count($params) === 6)
                || (
                    $subtype === 'revision' && isset($params[3])
                    && in_array($params[3], [ 'revision', 'archive', 'oldimage', 'filearchive' ])
                )
            ) {
                // See RevDelList::getLogParams()/RevDelLogList::getLogParams()
                $paramStart = $subtype === 'revision' ? 4 : 3;

                $old = $this->parseBitField($params[$paramStart + 1]);
                $new = $this->parseBitField($params[$paramStart + 2]);
                list($hid, $unhid, $extra) = RevisionDeleter::getChanges($new, $old);
                $changes = [];
                // messages used: revdelete-content-hid, revdelete-summary-hid, revdelete-uname-hid
                foreach ($hid as $v) {
                    $changes[] = $this->msg("$v-hid")->plain();
                }
                // messages used: revdelete-content-unhid, revdelete-summary-unhid,
                // revdelete-uname-unhid
                foreach ($unhid as $v) {
                    $changes[] = $this->msg("$v-unhid")->plain();
                }
                foreach ($extra as $v) {
                    $changes[] = $this->msg($v)->plain();
                }
                $changeText = $this->context->getLanguage()->listToText($changes);

                $newParams = array_slice($params, 0, 3);
                $newParams[3] = $changeText;
                $ids = is_array($params[$paramStart])
                    ? $params[$paramStart]
                    : explode(',', $params[$paramStart]);
                $newParams[4] = $this->context->getLanguage()->formatNum(count($ids));

                $this->parsedParametersDeleteLog = $newParams;
                return $this->parsedParametersDeleteLog;
            } else {
                $this->parsedParametersDeleteLog = array_slice($params, 0, 3);
                return $this->parsedParametersDeleteLog;
            }
        }

        $this->parsedParametersDeleteLog = $params;
        return $this->parsedParametersDeleteLog;
    }

    protected function parseBitField($string)
    {
        // Input is like ofield=2134 or just the number
        if (strpos($string, 'field=') === 1) {
            list(, $field) = explode('=', $string);

            return (int)$field;
        } else {
            return (int)$string;
        }
    }

    public function getActionLinks()
    {
        $user = $this->context->getUser();
        if (!$user->isAllowed('deletedhistory')
            || $this->entry->isDeleted(LogPage::DELETED_ACTION)
        ) {
            return '';
        }

        switch ($this->entry->getSubtype()) {
            case 'delete': // Show undelete link
            case 'delete_redir':
                if ($user->isAllowed('undelete')) {
                    $message = 'undeletelink';
                } else {
                    $message = 'undeleteviewlink';
                }
                $revert = Linker::linkKnown(
                    SpecialPage::getTitleFor('Undelete'),
                    $this->msg($message)->escaped(),
                    [],
                    [ 'target' => $this->entry->getTarget()->getPrefixedDBkey() ]
                );

                return $this->msg('parentheses')->rawParams($revert)->escaped();

            case 'revision': // If an edit was hidden from a page give a review link to the history
                $params = $this->extractParameters();
                if (!isset($params[3]) || !isset($params[4])) {
                    return '';
                }

                // Different revision types use different URL params...
                $key = $params[3];
                // This is a array or CSV of the IDs
                $ids = is_array($params[4])
                    ? $params[4]
                    : explode(',', $params[4]);

                $links = [];

                // If there's only one item, we can show a diff link
                if (count($ids) == 1) {
                    // Live revision diffs...
                    if ($key == 'oldid' || $key == 'revision') {
                        $links[] = Linker::linkKnown(
                            $this->entry->getTarget(),
                            $this->msg('diff')->escaped(),
                            [],
                            [
                                'diff' => intval($ids[0]),
                                'unhide' => 1
                            ]
                        );
                    // Deleted revision diffs...
                    } elseif ($key == 'artimestamp' || $key == 'archive') {
                        $links[] = Linker::linkKnown(
                            SpecialPage::getTitleFor('Undelete'),
                            $this->msg('diff')->escaped(),
                            [],
                            [
                                'target' => $this->entry->getTarget()->getPrefixedDBkey(),
                                'diff' => 'prev',
                                'timestamp' => $ids[0]
                            ]
                        );
                    }
                }

                // View/modify link...
                $links[] = Linker::linkKnown(
                    SpecialPage::getTitleFor('Revisiondelete'),
                    $this->msg('revdel-restore')->escaped(),
                    [],
                    [
                        'target' => $this->entry->getTarget()->getPrefixedText(),
                        'type' => $key,
                        'ids' => implode(',', $ids),
                    ]
                );

                return $this->msg('parentheses')->rawParams(
                    $this->context->getLanguage()->pipeList($links)
                )->escaped();

            case 'event': // Hidden log items, give review link
                $params = $this->extractParameters();
                if (!isset($params[3])) {
                    return '';
                }
                // This is a CSV of the IDs
                $query = $params[3];
                if (is_array($query)) {
                    $query = implode(',', $query);
                }
                // Link to each hidden object ID, $params[1] is the url param
                $revert = Linker::linkKnown(
                    SpecialPage::getTitleFor('Revisiondelete'),
                    $this->msg('revdel-restore')->escaped(),
                    [],
                    [
                        'target' => $this->entry->getTarget()->getPrefixedText(),
                        'type' => 'logging',
                        'ids' => $query
                    ]
                );

                return $this->msg('parentheses')->rawParams($revert)->escaped();
            default:
                return '';
        }
    }

    protected function getParametersForApi()
    {
        $entry = $this->entry;
        $params = [];

        $subtype = $this->entry->getSubtype();
        if (in_array($subtype, [ 'event', 'revision' ])) {
            $rawParams = $entry->getParameters();
            if ($subtype === 'event') {
                array_unshift($rawParams, 'logging');
            }

            static $map = [
                '4::type',
                '5::ids',
                '6::ofield',
                '7::nfield',
                '4::ids' => '5::ids',
                '5::ofield' => '6::ofield',
                '6::nfield' => '7::nfield',
            ];
            foreach ($map as $index => $key) {
                if (isset($rawParams[$index])) {
                    $rawParams[$key] = $rawParams[$index];
                    unset($rawParams[$index]);
                }
            }

            $old = $this->parseBitField($rawParams['6::ofield']);
            $new = $this->parseBitField($rawParams['7::nfield']);
            if (!is_array($rawParams['5::ids'])) {
                $rawParams['5::ids'] = explode(',', $rawParams['5::ids']);
            }

            $params = [
                '::type' => $rawParams['4::type'],
                ':array:ids' => $rawParams['5::ids'],
                ':assoc:old' => [ 'bitmask' => $old ],
                ':assoc:new' => [ 'bitmask' => $new ],
            ];

            static $fields = [
                Revision::DELETED_TEXT => 'content',
                Revision::DELETED_COMMENT => 'comment',
                Revision::DELETED_USER => 'user',
                Revision::DELETED_RESTRICTED => 'restricted',
            ];
            foreach ($fields as $bit => $key) {
                $params[':assoc:old'][$key] = (bool)($old & $bit);
                $params[':assoc:new'][$key] = (bool)($new & $bit);
            }
        }

        return $params;
    }

    public function formatParametersForApi()
    {
        $ret = parent::formatParametersForApi();
        if (isset($ret['ids'])) {
            ApiResult::setIndexedTagName($ret['ids'], 'id');
        }
        return $ret;
    }
}
