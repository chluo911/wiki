<?php
/**
 * Implements Special:Protectedtitles
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
 * A special page that list protected titles from creation
 *
 * @ingroup SpecialPage
 */
class SpecialProtectedtitles extends SpecialPage
{
    protected $IdLevel = 'level';
    protected $IdType = 'type';

    public function __construct()
    {
        parent::__construct('Protectedtitles');
    }

    public function execute($par)
    {
        $this->setHeaders();
        $this->outputHeader();

        $request = $this->getRequest();
        $type = $request->getVal($this->IdType);
        $level = $request->getVal($this->IdLevel);
        $sizetype = $request->getVal('sizetype');
        $size = $request->getIntOrNull('size');
        $NS = $request->getIntOrNull('namespace');

        $pager = new ProtectedTitlesPager($this, [], $type, $level, $NS, $sizetype, $size);

        $this->getOutput()->addHTML($this->showOptions($NS, $type, $level));

        if ($pager->getNumRows()) {
            $this->getOutput()->addHTML(
                $pager->getNavigationBar() .
                    '<ul>' . $pager->getBody() . '</ul>' .
                    $pager->getNavigationBar()
            );
        } else {
            $this->getOutput()->addWikiMsg('protectedtitlesempty');
        }
    }

    /**
     * Callback function to output a restriction
     *
     * @param object $row Database row
     * @return string
     */
    public function formatRow($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param int $namespace
     * @param string $type
     * @param string $level
     * @return string
     * @private
     */
    public function showOptions($namespace, $type = 'edit', $level)
    {
        $action = htmlspecialchars(wfScript());
        $title = $this->getPageTitle();
        $special = htmlspecialchars($title->getPrefixedDBkey());

        return "<form action=\"$action\" method=\"get\">\n" .
            '<fieldset>' .
            Xml::element('legend', [], $this->msg('protectedtitles')->text()) .
            Html::hidden('title', $special) . "&#160;\n" .
            $this->getNamespaceMenu($namespace) . "&#160;\n" .
            $this->getLevelMenu($level) . "&#160;\n" .
            "&#160;" . Xml::submitButton($this->msg('protectedtitles-submit')->text()) . "\n" .
            "</fieldset></form>";
    }

    /**
     * Prepare the namespace filter drop-down; standard namespace
     * selector, sans the MediaWiki namespace
     *
     * @param string|null $namespace Pre-select namespace
     * @return string
     */
    public function getNamespaceMenu($namespace = null)
    {
        return Html::namespaceSelector(
            [
                'selected' => $namespace,
                'all' => '',
                'label' => $this->msg('namespace')->text()
            ],
            [
                'name' => 'namespace',
                'id' => 'namespace',
                'class' => 'namespaceselector',
            ]
        );
    }

    /**
     * @param string $pr_level Determines which option is selected as default
     * @return string Formatted HTML
     * @private
     */
    public function getLevelMenu($pr_level)
    {
        // Temporary array
        $m = [ $this->msg('restriction-level-all')->text() => 0 ];
        $options = [];

        // First pass to load the log names
        foreach ($this->getConfig()->get('RestrictionLevels') as $type) {
            if ($type != '' && $type != '*') {
                // Messages: restriction-level-sysop, restriction-level-autoconfirmed
                $text = $this->msg("restriction-level-$type")->text();
                $m[$text] = $type;
            }
        }

        // Is there only one level (aside from "all")?
        if (count($m) <= 2) {
            return '';
        }
        // Third pass generates sorted XHTML content
        foreach ($m as $text => $type) {
            $selected = ($type == $pr_level);
            $options[] = Xml::option($text, $type, $selected);
        }

        return Xml::label($this->msg('restriction-level')->text(), $this->IdLevel) . '&#160;' .
            Xml::tags(
                'select',
                [ 'id' => $this->IdLevel, 'name' => $this->IdLevel ],
                implode("\n", $options)
            );
    }

    protected function getGroupName()
    {
        return 'maintenance';
    }
}
