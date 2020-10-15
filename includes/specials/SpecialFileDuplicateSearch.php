<?php
use MediaWiki\MediaWikiServices;

/**
 * Implements Special:FileDuplicateSearch
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
 * @author Raimond Spekking, based on Special:MIMESearch by Ævar Arnfjörð Bjarmason
 */

/**
 * Searches the database for files of the requested hash, comparing this with the
 * 'img_sha1' field in the image table.
 *
 * @ingroup SpecialPage
 */
class FileDuplicateSearchPage extends QueryPage
{
    protected $hash = '';
    protected $filename = '';

    /**
     * @var File $file selected reference file, if present
     */
    protected $file = null;

    public function __construct($name = 'FileDuplicateSearch')
    {
        parent::__construct($name);
    }

    public function isSyndicated()
    {
        return false;
    }

    public function isCacheable()
    {
        return false;
    }

    public function isCached()
    {
        return false;
    }

    public function linkParameters()
    {
        return [ 'filename' => $this->filename ];
    }

    /**
     * Fetch dupes from all connected file repositories.
     *
     * @return array Array of File objects
     */
    public function getDupes()
    {
        return RepoGroup::singleton()->findBySha1($this->hash);
    }

    /**
     *
     * @param array $dupes Array of File objects
     */
    public function showList($dupes)
    {
        $html = [];
        $html[] = $this->openList(0);

        foreach ($dupes as $dupe) {
            $line = $this->formatResult(null, $dupe);
            $html[] = "<li>" . $line . "</li>";
        }
        $html[] = $this->closeList();

        $this->getOutput()->addHTML(implode("\n", $html));
    }

    public function getQueryInfo()
    {
        return [
            'tables' => [ 'image' ],
            'fields' => [
                'title' => 'img_name',
                'value' => 'img_sha1',
                'img_user_text',
                'img_timestamp'
            ],
            'conds' => [ 'img_sha1' => $this->hash ]
        ];
    }

    public function execute($par)
    {
        $this->setHeaders();
        $this->outputHeader();

        $this->filename = $par !== null ? $par : $this->getRequest()->getText('filename');
        $this->file = null;
        $this->hash = '';
        $title = Title::newFromText($this->filename, NS_FILE);
        if ($title && $title->getText() != '') {
            $this->file = wfFindFile($title);
        }

        $out = $this->getOutput();

        # Create the input form
        $formFields = [
            'filename' => [
                'type' => 'text',
                'name' => 'filename',
                'label-message' => 'fileduplicatesearch-filename',
                'id' => 'filename',
                'size' => 50,
                'value' => $this->filename,
            ],
        ];
        $hiddenFields = [
            'title' => $this->getPageTitle()->getPrefixedDBkey(),
        ];
        $htmlForm = HTMLForm::factory('ooui', $formFields, $this->getContext());
        $htmlForm->addHiddenFields($hiddenFields);
        $htmlForm->setAction(wfScript());
        $htmlForm->setMethod('get');
        $htmlForm->setSubmitProgressive();
        $htmlForm->setSubmitTextMsg($this->msg('fileduplicatesearch-submit'));

        // The form should be visible always, even if it was submitted (e.g. to perform another action).
        // To bypass the callback validation of HTMLForm, use prepareForm() and displayForm().
        $htmlForm->prepareForm()->displayForm(false);

        if ($this->file) {
            $this->hash = $this->file->getSha1();
        } elseif ($this->filename !== '') {
            $out->wrapWikiMsg(
                "<p class='mw-fileduplicatesearch-noresults'>\n$1\n</p>",
                [ 'fileduplicatesearch-noresults', wfEscapeWikiText($this->filename) ]
            );
        }

        if ($this->hash != '') {
            # Show a thumbnail of the file
            $img = $this->file;
            if ($img) {
                $thumb = $img->transform([ 'width' => 120, 'height' => 120 ]);
                if ($thumb) {
                    $out->addModuleStyles('mediawiki.special');
                    $out->addHTML('<div id="mw-fileduplicatesearch-icon">' .
                        $thumb->toHtml([ 'desc-link' => false ]) . '<br />' .
                        $this->msg('fileduplicatesearch-info')->numParams(
                            $img->getWidth(),
                            $img->getHeight()
                        )->params(
                                $this->getLanguage()->formatSize($img->getSize()),
                                $img->getMimeType()
                            )->parseAsBlock() .
                        '</div>');
                }
            }

            $dupes = $this->getDupes();
            $numRows = count($dupes);

            # Show a short summary
            if ($numRows == 1) {
                $out->wrapWikiMsg(
                    "<p class='mw-fileduplicatesearch-result-1'>\n$1\n</p>",
                    [ 'fileduplicatesearch-result-1', wfEscapeWikiText($this->filename) ]
                );
            } elseif ($numRows) {
                $out->wrapWikiMsg(
                    "<p class='mw-fileduplicatesearch-result-n'>\n$1\n</p>",
                    [ 'fileduplicatesearch-result-n', wfEscapeWikiText($this->filename),
                        $this->getLanguage()->formatNum($numRows - 1) ]
                );
            }

            $this->doBatchLookups($dupes);
            $this->showList($dupes);
        }
    }

    public function doBatchLookups($list)
    {
        $batch = new LinkBatch();
        /** @var File $file */
        foreach ($list as $file) {
            $batch->addObj($file->getTitle());
            if ($file->isLocal()) {
                $userName = $file->getUser('text');
                $batch->add(NS_USER, $userName);
                $batch->add(NS_USER_TALK, $userName);
            }
        }

        $batch->execute();
    }

    /**
     *
     * @param Skin $skin
     * @param File $result
     * @return string HTML
     */
    public function formatResult($skin, $result)
    {
        global $wgContLang;

        $nt = $result->getTitle();
        $text = $wgContLang->convert($nt->getText());
        $plink = Linker::link(
            $nt,
            htmlspecialchars($text)
        );

        $userText = $result->getUser('text');
        if ($result->isLocal()) {
            $userId = $result->getUser('id');
            $user = Linker::userLink($userId, $userText);
            $user .= '<span style="white-space: nowrap;">';
            $user .= Linker::userToolLinks($userId, $userText);
            $user .= '</span>';
        } else {
            $user = htmlspecialchars($userText);
        }

        $time = htmlspecialchars($this->getLanguage()->userTimeAndDate(
            $result->getTimestamp(),
            $this->getUser()
        ));

        return "$plink . . $user . . $time";
    }

    /**
     * Return an array of subpages beginning with $search that this special page will accept.
     *
     * @param string $search Prefix to search for
     * @param int $limit Maximum number of results to return (usually 10)
     * @param int $offset Number of results to skip (usually 0)
     * @return string[] Matching subpages
     */
    public function prefixSearchSubpages($search, $limit, $offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getGroupName()
    {
        return 'media';
    }
}
