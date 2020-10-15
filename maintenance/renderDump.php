<?php
/**
 * Take page text out of an XML dump file and render basic HTML out to files.
 * This is *NOT* suitable for publishing or offline use; it's intended for
 * running comparative tests of parsing behavior using real-world data.
 *
 * Templates etc are pulled from the local wiki database, not from the dump.
 *
 * Copyright (C) 2006 Brion Vibber <brion@pobox.com>
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
 * @ingroup Maintenance
 */

require_once __DIR__ . '/Maintenance.php';

/**
 * Maintenance script that takes page text out of an XML dump file
 * and render basic HTML out to files.
 *
 * @ingroup Maintenance
 */
class DumpRenderer extends Maintenance
{
    private $count = 0;
    private $outputDirectory;
    private $startTime;

    public function __construct()
    {
        parent::__construct();
        $this->addDescription(
            'Take page text out of an XML dump file and render basic HTML out to files'
        );
        $this->addOption('output-dir', 'The directory to output the HTML files to', true, true);
        $this->addOption('prefix', 'Prefix for the rendered files (defaults to wiki)', false, true);
        $this->addOption('parser', 'Use an alternative parser class', false, true);
    }

    public function execute()
    {
        $this->outputDirectory = $this->getOption('output-dir');
        $this->prefix = $this->getOption('prefix', 'wiki');
        $this->startTime = microtime(true);

        if ($this->hasOption('parser')) {
            global $wgParserConf;
            $wgParserConf['class'] = $this->getOption('parser');
            $this->prefix .= "-{$wgParserConf['class']}";
        }

        $source = new ImportStreamSource($this->getStdin());
        $importer = new WikiImporter($source, $this->getConfig());

        $importer->setRevisionCallback(
            [ $this, 'handleRevision' ]
        );

        $importer->doImport();

        $delta = microtime(true) - $this->startTime;
        $this->error("Rendered {$this->count} pages in " . round($delta, 2) . " seconds ");
        if ($delta > 0) {
            $this->error(round($this->count / $delta, 2) . " pages/sec");
        }
        $this->error("\n");
    }

    /**
     * Callback function for each revision, turn into HTML and save
     * @param Revision $rev
     */
    public function handleRevision($rev)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

$maintClass = "DumpRenderer";
require_once RUN_MAINTENANCE_IF_MAIN;
