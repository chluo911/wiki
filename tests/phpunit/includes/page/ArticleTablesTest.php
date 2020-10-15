<?php

/**
 * @group Database
 */
class ArticleTablesTest extends MediaWikiLangTestCase
{
    /**
     * Make sure that bug 14404 doesn't strike again. We don't want
     * templatelinks based on the user language when {{int:}} is used, only the
     * content language.
     *
     * @covers Title::getTemplateLinksFrom
     * @covers Title::getLinksFrom
     */
    public function testTemplatelinksUsesContentLanguage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
