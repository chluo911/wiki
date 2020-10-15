<?php
/**
 * Import one or more images from the local file system into the wiki without
 * using the web-based interface.
 *
 * "Smart import" additions:
 * - aim: preserve the essential metadata (user, description) when importing media
 *   files from an existing wiki.
 * - process:
 *      - interface with the source wiki, don't use bare files only (see --source-wiki-url).
 *      - fetch metadata from source wiki for each file to import.
 *      - commit the fetched metadata to the destination wiki while submitting.
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
 * @author Rob Church <robchur@gmail.com>
 * @author Mij <mij@bitchx.it>
 */

$optionsWithArgs = [
    'extensions', 'comment', 'comment-file', 'comment-ext', 'summary', 'user',
    'license', 'sleep', 'limit', 'from', 'source-wiki-url', 'timestamp',
];

$optionsWithoutArgs = [
    'protect', 'unprotect', 'search-recursively', 'check-userblock', 'overwrite',
    'skip-dupes', 'dry'
];

require_once __DIR__ . '/commandLine.inc';
require_once __DIR__ . '/importImages.inc';
$processed = $added = $ignored = $skipped = $overwritten = $failed = 0;

echo "Import Images\n\n";

# Need a path
if (count($args) == 0) {
    showUsage();
}

$dir = $args[0];

# Check Protection
if (isset($options['protect']) && isset($options['unprotect'])) {
    die("Cannot specify both protect and unprotect.  Only 1 is allowed.\n");
}

if (isset($options['protect']) && $options['protect'] == 1) {
    die("You must specify a protection option.\n");
}

# Prepare the list of allowed extensions
global $wgFileExtensions;
$extensions = isset($options['extensions'])
    ? explode(',', strtolower($options['extensions']))
    : $wgFileExtensions;

# Search the path provided for candidates for import
$files = findFiles($dir, $extensions, isset($options['search-recursively']));

# Initialise the user for this operation
$user = isset($options['user'])
    ? User::newFromName($options['user'])
    : User::newSystemUser('Maintenance script', [ 'steal' => true ]);
if (!$user instanceof User) {
    $user = User::newSystemUser('Maintenance script', [ 'steal' => true ]);
}
$wgUser = $user;

# Get block check. If a value is given, this specified how often the check is performed
if (isset($options['check-userblock'])) {
    if (!$options['check-userblock']) {
        $checkUserBlock = 1;
    } else {
        $checkUserBlock = (int)$options['check-userblock'];
    }
} else {
    $checkUserBlock = false;
}

# Get --from
MediaWiki\suppressWarnings();
$from = $options['from'];
MediaWiki\restoreWarnings();

# Get sleep time.
MediaWiki\suppressWarnings();
$sleep = $options['sleep'];
MediaWiki\restoreWarnings();

if ($sleep) {
    $sleep = (int)$sleep;
}

# Get limit number
MediaWiki\suppressWarnings();
$limit = $options['limit'];
MediaWiki\restoreWarnings();

if ($limit) {
    $limit = (int)$limit;
}

$timestamp = isset($options['timestamp']) ? $options['timestamp'] : false;

# Get the upload comment. Provide a default one in case there's no comment given.
$comment = 'Importing file';

if (isset($options['comment-file'])) {
    $comment = file_get_contents($options['comment-file']);
    if ($comment === false || $comment === null) {
        die("failed to read comment file: {$options['comment-file']}\n");
    }
} elseif (isset($options['comment'])) {
    $comment = $options['comment'];
}

$commentExt = isset($options['comment-ext']) ? $options['comment-ext'] : false;

$summary = isset($options['summary']) ? $options['summary'] : '';

# Get the license specifier
$license = isset($options['license']) ? $options['license'] : '';

# Batch "upload" operation
$count = count($files);
if ($count > 0) {
    foreach ($files as $file) {
        $base = UtfNormal\Validator::cleanUp(wfBaseName($file));

        # Validate a title
        $title = Title::makeTitleSafe(NS_FILE, $base);
        if (!is_object($title)) {
            echo "{$base} could not be imported; a valid title cannot be produced\n";
            continue;
        }

        if ($from) {
            if ($from == $title->getDBkey()) {
                $from = null;
            } else {
                $ignored++;
                continue;
            }
        }

        if ($checkUserBlock && (($processed % $checkUserBlock) == 0)) {
            $user->clearInstanceCache('name'); // reload from DB!
            if ($user->isBlocked()) {
                echo $user->getName() . " was blocked! Aborting.\n";
                break;
            }
        }

        # Check existence
        $image = wfLocalFile($title);
        if ($image->exists()) {
            if (isset($options['overwrite'])) {
                echo "{$base} exists, overwriting...";
                $svar = 'overwritten';
            } else {
                echo "{$base} exists, skipping\n";
                $skipped++;
                continue;
            }
        } else {
            if (isset($options['skip-dupes'])) {
                $repo = $image->getRepo();
                # XXX: we end up calculating this again when actually uploading. that sucks.
                $sha1 = FSFile::getSha1Base36FromPath($file);

                $dupes = $repo->findBySha1($sha1);

                if ($dupes) {
                    echo "{$base} already exists as " . $dupes[0]->getName() . ", skipping\n";
                    $skipped++;
                    continue;
                }
            }

            echo "Importing {$base}...";
            $svar = 'added';
        }

        if (isset($options['source-wiki-url'])) {
            /* find comment text directly from source wiki, through MW's API */
            $real_comment = getFileCommentFromSourceWiki($options['source-wiki-url'], $base);
            if ($real_comment === false) {
                $commentText = $comment;
            } else {
                $commentText = $real_comment;
            }

            /* find user directly from source wiki, through MW's API */
            $real_user = getFileUserFromSourceWiki($options['source-wiki-url'], $base);
            if ($real_user === false) {
                $wgUser = $user;
            } else {
                $wgUser = User::newFromName($real_user);
                if ($wgUser === false) {
                    # user does not exist in target wiki
                    echo "failed: user '$real_user' does not exist in target wiki.";
                    continue;
                }
            }
        } else {
            # Find comment text
            $commentText = false;

            if ($commentExt) {
                $f = findAuxFile($file, $commentExt);
                if (!$f) {
                    echo " No comment file with extension {$commentExt} found "
                        . "for {$file}, using default comment. ";
                } else {
                    $commentText = file_get_contents($f);
                    if (!$commentText) {
                        echo " Failed to load comment file {$f}, using default comment. ";
                    }
                }
            }

            if (!$commentText) {
                $commentText = $comment;
            }
        }

        # Import the file
        if (isset($options['dry'])) {
            echo " publishing {$file} by '" . $wgUser->getName() . "', comment '$commentText'... ";
        } else {
            $mwProps = new MWFileProps(MimeMagic::singleton());
            $props = $mwProps->getPropsFromPath($file, true);
            $flags = 0;
            $publishOptions = [];
            $handler = MediaHandler::getHandler($props['mime']);
            if ($handler) {
                $publishOptions['headers'] = $handler->getStreamHeaders($props['metadata']);
            } else {
                $publishOptions['headers'] = [];
            }
            $archive = $image->publish($file, $flags, $publishOptions);
            if (!$archive->isGood()) {
                echo "failed. (" .
                    $archive->getWikiText(false, false, 'en') .
                    ")\n";
                $failed++;
                continue;
            }
        }

        $commentText = SpecialUpload::getInitialPageText($commentText, $license);
        if (!isset($options['summary'])) {
            $summary = $commentText;
        }

        if (isset($options['dry'])) {
            echo "done.\n";
        } elseif ($image->recordUpload2(
            $archive->value,
            $summary,
            $commentText,
            $props,
            $timestamp
        )) {
            # We're done!
            echo "done.\n";

            $doProtect = false;

            global $wgRestrictionLevels;

            $protectLevel = isset($options['protect']) ? $options['protect'] : null;

            if ($protectLevel && in_array($protectLevel, $wgRestrictionLevels)) {
                $doProtect = true;
            }
            if (isset($options['unprotect'])) {
                $protectLevel = '';
                $doProtect = true;
            }

            if ($doProtect) {
                # Protect the file
                echo "\nWaiting for replica DBs...\n";
                // Wait for replica DBs.
                sleep(2.0); # Why this sleep?
                wfWaitForSlaves();

                echo "\nSetting image restrictions ... ";

                $cascade = false;
                $restrictions = [];
                foreach ($title->getRestrictionTypes() as $type) {
                    $restrictions[$type] = $protectLevel;
                }

                $page = WikiPage::factory($title);
                $status = $page->doUpdateRestrictions($restrictions, [], $cascade, '', $user);
                echo($status->isOK() ? 'done' : 'failed') . "\n";
            }
        } else {
            echo "failed. (at recordUpload stage)\n";
            $svar = 'failed';
        }

        $$svar++;
        $processed++;

        if ($limit && $processed >= $limit) {
            break;
        }

        if ($sleep) {
            sleep($sleep);
        }
    }

    # Print out some statistics
    echo "\n";
    foreach (
        [
            'count' => 'Found',
            'limit' => 'Limit',
            'ignored' => 'Ignored',
            'added' => 'Added',
            'skipped' => 'Skipped',
            'overwritten' => 'Overwritten',
            'failed' => 'Failed'
        ] as $var => $desc
    ) {
        if ($$var > 0) {
            echo "{$desc}: {$$var}\n";
        }
    }
} else {
    echo "No suitable files could be found for import.\n";
}

exit(0);

function showUsage($reason = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
