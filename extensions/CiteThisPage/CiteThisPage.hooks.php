<?php

class CiteThisPageHooks
{

    /**
     * @param SkinTemplate $skintemplate
     * @param $nav_urls
     * @param $oldid
     * @param $revid
     * @return bool
     */
    public static function onSkinTemplateBuildNavUrlsNav_urlsAfterPermalink(
        &$skintemplate,
        &$nav_urls,
        &$oldid,
        &$revid
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param BaseTemplate $baseTemplate
     * @param array $toolbox
     * @return bool
     */
    public static function onBaseTemplateToolbox(BaseTemplate $baseTemplate, array &$toolbox)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
