<?php

/**
 * An aggressive spam cleanup script.
 * Searches the database for matching pages, and reverts them to the last non-spammed revision.
 * If all revisions contain spam, deletes the page
 */

require_once('../../maintenance/commandLine.inc');
require_once('SpamBlacklist_body.php');

/**
 * Find the latest revision of the article that does not contain spam and revert to it
 */
function cleanupArticle(Revision $rev, $regexes, $match)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

//------------------------------------------------------------------------------

$username = 'Spam cleanup script';
if (method_exists('User', 'newSystemUser')) {
    $wgUser = User::newSystemUser($username, array( 'steal' => true ));
} else {
    $wgUser = User::newFromName($username);
    if ($wgUser->idForName() == 0) {
        // Create the user
        $status = $wgUser->addToDatabase();
        if ($status === null || $status->isOK()) {
            $dbw = wfGetDB(DB_MASTER);
            $dbw->update(
                'user',
                array( 'user_password' => 'nologin' ),
                array( 'user_name' => $username ),
                $username
            );
        }
    }
}

if (isset($options['n'])) {
    $dryRun = true;
} else {
    $dryRun = false;
}

$sb = new SpamBlacklist($wgSpamBlacklistSettings);
if ($wgSpamBlacklistFiles) {
    $sb->files = $wgSpamBlacklistFiles;
}
$regexes = $sb->getBlacklists();
if (!$regexes) {
    print "Invalid regex, can't clean up spam\n";
    exit(1);
}

$dbr = wfGetDB(DB_SLAVE);
$maxID = $dbr->selectField('page', 'MAX(page_id)');
$reportingInterval = 100;

print "Regexes are " . implode(', ', array_map('count', $regexes)) . " bytes\n";
print "Searching for spam in $maxID pages...\n";
if ($dryRun) {
    print "Dry run only\n";
}

for ($id = 1; $id <= $maxID; $id++) {
    if ($id % $reportingInterval == 0) {
        printf("%-8d  %-5.2f%%\r", $id, $id / $maxID * 100);
    }
    $revision = Revision::loadFromPageId($dbr, $id);
    if ($revision) {
        $text = ContentHandler::getContentText($revision->getContent());
        if ($text) {
            foreach ($regexes as $regex) {
                if (preg_match($regex, $text, $matches)) {
                    $title = $revision->getTitle();
                    $titleText = $title->getPrefixedText();
                    if ($dryRun) {
                        print "\nFound spam in [[$titleText]]\n";
                    } else {
                        print "\nCleaning up links to {$matches[0]} in [[$titleText]]\n";
                        $match = str_replace('http://', '', $matches[0]);
                        cleanupArticle($revision, $regexes, $match);
                    }
                }
            }
        }
    }
}
// Just for satisfaction
printf("%-8d  %-5.2f%%\n", $id - 1, ($id - 1) / $maxID * 100);
