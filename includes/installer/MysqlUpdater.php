<?php
/**
 * MySQL-specific updater.
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
 * @ingroup Deployment
 */

/**
 * Mysql update list and mysql-specific update functions.
 *
 * @ingroup Deployment
 * @since 1.17
 */
class MysqlUpdater extends DatabaseUpdater
{
    protected function getCoreUpdateList()
    {
        return [
            [ 'disableContentHandlerUseDB' ],

            // 1.2
            [ 'addField', 'ipblocks', 'ipb_id', 'patch-ipblocks.sql' ],
            [ 'addField', 'ipblocks', 'ipb_expiry', 'patch-ipb_expiry.sql' ],
            [ 'doInterwikiUpdate' ],
            [ 'doIndexUpdate' ],
            [ 'addField', 'recentchanges', 'rc_type', 'patch-rc_type.sql' ],
            [ 'addIndex', 'recentchanges', 'new_name_timestamp', 'patch-rc-newindex.sql' ],

            // 1.3
            [ 'addField', 'user', 'user_real_name', 'patch-user-realname.sql' ],
            [ 'addTable', 'querycache', 'patch-querycache.sql' ],
            [ 'addTable', 'objectcache', 'patch-objectcache.sql' ],
            [ 'addTable', 'categorylinks', 'patch-categorylinks.sql' ],
            [ 'doOldLinksUpdate' ],
            [ 'doFixAncientImagelinks' ],
            [ 'addField', 'recentchanges', 'rc_ip', 'patch-rc_ip.sql' ],

            // 1.4
            [ 'addIndex', 'image', 'PRIMARY', 'patch-image_name_primary.sql' ],
            [ 'addField', 'recentchanges', 'rc_id', 'patch-rc_id.sql' ],
            [ 'addField', 'recentchanges', 'rc_patrolled', 'patch-rc-patrol.sql' ],
            [ 'addTable', 'logging', 'patch-logging.sql' ],
            [ 'addField', 'user', 'user_token', 'patch-user_token.sql' ],
            [ 'addField', 'watchlist', 'wl_notificationtimestamp', 'patch-email-notification.sql' ],
            [ 'doWatchlistUpdate' ],
            [ 'dropField', 'user', 'user_emailauthenticationtimestamp',
                'patch-email-authentication.sql' ],

            // 1.5
            [ 'doSchemaRestructuring' ],
            [ 'addField', 'logging', 'log_params', 'patch-log_params.sql' ],
            [ 'checkBin', 'logging', 'log_title', 'patch-logging-title.sql', ],
            [ 'addField', 'archive', 'ar_rev_id', 'patch-archive-rev_id.sql' ],
            [ 'addField', 'page', 'page_len', 'patch-page_len.sql' ],
            [ 'dropField', 'revision', 'inverse_timestamp', 'patch-inverse_timestamp.sql' ],
            [ 'addField', 'revision', 'rev_text_id', 'patch-rev_text_id.sql' ],
            [ 'addField', 'revision', 'rev_deleted', 'patch-rev_deleted.sql' ],
            [ 'addField', 'image', 'img_width', 'patch-img_width.sql' ],
            [ 'addField', 'image', 'img_metadata', 'patch-img_metadata.sql' ],
            [ 'addField', 'user', 'user_email_token', 'patch-user_email_token.sql' ],
            [ 'addField', 'archive', 'ar_text_id', 'patch-archive-text_id.sql' ],
            [ 'doNamespaceSize' ],
            [ 'addField', 'image', 'img_media_type', 'patch-img_media_type.sql' ],
            [ 'doPagelinksUpdate' ],
            [ 'dropField', 'image', 'img_type', 'patch-drop_img_type.sql' ],
            [ 'doUserUniqueUpdate' ],
            [ 'doUserGroupsUpdate' ],
            [ 'addField', 'site_stats', 'ss_total_pages', 'patch-ss_total_articles.sql' ],
            [ 'addTable', 'user_newtalk', 'patch-usernewtalk2.sql' ],
            [ 'addTable', 'transcache', 'patch-transcache.sql' ],
            [ 'addField', 'interwiki', 'iw_trans', 'patch-interwiki-trans.sql' ],

            // 1.6
            [ 'doWatchlistNull' ],
            [ 'addIndex', 'logging', 'times', 'patch-logging-times-index.sql' ],
            [ 'addField', 'ipblocks', 'ipb_range_start', 'patch-ipb_range_start.sql' ],
            [ 'doPageRandomUpdate' ],
            [ 'addField', 'user', 'user_registration', 'patch-user_registration.sql' ],
            [ 'doTemplatelinksUpdate' ],
            [ 'addTable', 'externallinks', 'patch-externallinks.sql' ],
            [ 'addTable', 'job', 'patch-job.sql' ],
            [ 'addField', 'site_stats', 'ss_images', 'patch-ss_images.sql' ],
            [ 'addTable', 'langlinks', 'patch-langlinks.sql' ],
            [ 'addTable', 'querycache_info', 'patch-querycacheinfo.sql' ],
            [ 'addTable', 'filearchive', 'patch-filearchive.sql' ],
            [ 'addField', 'ipblocks', 'ipb_anon_only', 'patch-ipb_anon_only.sql' ],
            [ 'addIndex', 'recentchanges', 'rc_ns_usertext', 'patch-recentchanges-utindex.sql' ],
            [ 'addIndex', 'recentchanges', 'rc_user_text', 'patch-rc_user_text-index.sql' ],

            // 1.9
            [ 'addField', 'user', 'user_newpass_time', 'patch-user_newpass_time.sql' ],
            [ 'addTable', 'redirect', 'patch-redirect.sql' ],
            [ 'addTable', 'querycachetwo', 'patch-querycachetwo.sql' ],
            [ 'addField', 'ipblocks', 'ipb_enable_autoblock', 'patch-ipb_optional_autoblock.sql' ],
            [ 'doBacklinkingIndicesUpdate' ],
            [ 'addField', 'recentchanges', 'rc_old_len', 'patch-rc_len.sql' ],
            [ 'addField', 'user', 'user_editcount', 'patch-user_editcount.sql' ],

            // 1.10
            [ 'doRestrictionsUpdate' ],
            [ 'addField', 'logging', 'log_id', 'patch-log_id.sql' ],
            [ 'addField', 'revision', 'rev_parent_id', 'patch-rev_parent_id.sql' ],
            [ 'addField', 'page_restrictions', 'pr_id', 'patch-page_restrictions_sortkey.sql' ],
            [ 'addField', 'revision', 'rev_len', 'patch-rev_len.sql' ],
            [ 'addField', 'recentchanges', 'rc_deleted', 'patch-rc_deleted.sql' ],
            [ 'addField', 'logging', 'log_deleted', 'patch-log_deleted.sql' ],
            [ 'addField', 'archive', 'ar_deleted', 'patch-ar_deleted.sql' ],
            [ 'addField', 'ipblocks', 'ipb_deleted', 'patch-ipb_deleted.sql' ],
            [ 'addField', 'filearchive', 'fa_deleted', 'patch-fa_deleted.sql' ],
            [ 'addField', 'archive', 'ar_len', 'patch-ar_len.sql' ],

            // 1.11
            [ 'addField', 'ipblocks', 'ipb_block_email', 'patch-ipb_emailban.sql' ],
            [ 'doCategorylinksIndicesUpdate' ],
            [ 'addField', 'oldimage', 'oi_metadata', 'patch-oi_metadata.sql' ],
            [ 'addIndex', 'archive', 'usertext_timestamp', 'patch-archive-user-index.sql' ],
            [ 'addIndex', 'image', 'img_usertext_timestamp', 'patch-image-user-index.sql' ],
            [ 'addIndex', 'oldimage', 'oi_usertext_timestamp', 'patch-oldimage-user-index.sql' ],
            [ 'addField', 'archive', 'ar_page_id', 'patch-archive-page_id.sql' ],
            [ 'addField', 'image', 'img_sha1', 'patch-img_sha1.sql' ],

            // 1.12
            [ 'addTable', 'protected_titles', 'patch-protected_titles.sql' ],

            // 1.13
            [ 'addField', 'ipblocks', 'ipb_by_text', 'patch-ipb_by_text.sql' ],
            [ 'addTable', 'page_props', 'patch-page_props.sql' ],
            [ 'addTable', 'updatelog', 'patch-updatelog.sql' ],
            [ 'addTable', 'category', 'patch-category.sql' ],
            [ 'doCategoryPopulation' ],
            [ 'addField', 'archive', 'ar_parent_id', 'patch-ar_parent_id.sql' ],
            [ 'addField', 'user_newtalk', 'user_last_timestamp', 'patch-user_last_timestamp.sql' ],
            [ 'doPopulateParentId' ],
            [ 'checkBin', 'protected_titles', 'pt_title', 'patch-pt_title-encoding.sql', ],
            [ 'doMaybeProfilingMemoryUpdate' ],
            [ 'doFilearchiveIndicesUpdate' ],

            // 1.14
            [ 'addField', 'site_stats', 'ss_active_users', 'patch-ss_active_users.sql' ],
            [ 'doActiveUsersInit' ],
            [ 'addField', 'ipblocks', 'ipb_allow_usertalk', 'patch-ipb_allow_usertalk.sql' ],

            // 1.15
            [ 'addTable', 'change_tag', 'patch-change_tag.sql' ],
            [ 'addTable', 'tag_summary', 'patch-tag_summary.sql' ],
            [ 'addTable', 'valid_tag', 'patch-valid_tag.sql' ],

            // 1.16
            [ 'addTable', 'user_properties', 'patch-user_properties.sql' ],
            [ 'addTable', 'log_search', 'patch-log_search.sql' ],
            [ 'addField', 'logging', 'log_user_text', 'patch-log_user_text.sql' ],
            # listed separately from the previous update because 1.16 was released without this update
            [ 'doLogUsertextPopulation' ],
            [ 'doLogSearchPopulation' ],
            [ 'addTable', 'l10n_cache', 'patch-l10n_cache.sql' ],
            [ 'addIndex', 'log_search', 'ls_field_val', 'patch-log_search-rename-index.sql' ],
            [ 'addIndex', 'change_tag', 'change_tag_rc_tag', 'patch-change_tag-indexes.sql' ],
            [ 'addField', 'redirect', 'rd_interwiki', 'patch-rd_interwiki.sql' ],
            [ 'doUpdateTranscacheField' ],
            [ 'doUpdateMimeMinorField' ],

            // 1.17
            [ 'addTable', 'iwlinks', 'patch-iwlinks.sql' ],
            [ 'addIndex', 'iwlinks', 'iwl_prefix_title_from', 'patch-rename-iwl_prefix.sql' ],
            [ 'addField', 'updatelog', 'ul_value', 'patch-ul_value.sql' ],
            [ 'addField', 'interwiki', 'iw_api', 'patch-iw_api_and_wikiid.sql' ],
            [ 'dropIndex', 'iwlinks', 'iwl_prefix', 'patch-kill-iwl_prefix.sql' ],
            [ 'addField', 'categorylinks', 'cl_collation', 'patch-categorylinks-better-collation.sql' ],
            [ 'doClFieldsUpdate' ],
            [ 'addTable', 'module_deps', 'patch-module_deps.sql' ],
            [ 'dropIndex', 'archive', 'ar_page_revid', 'patch-archive_kill_ar_page_revid.sql' ],
            [ 'addIndex', 'archive', 'ar_revid', 'patch-archive_ar_revid.sql' ],
            [ 'doLangLinksLengthUpdate' ],

            // 1.18
            [ 'doUserNewTalkTimestampNotNull' ],
            [ 'addIndex', 'user', 'user_email', 'patch-user_email_index.sql' ],
            [ 'modifyField', 'user_properties', 'up_property', 'patch-up_property.sql' ],
            [ 'addTable', 'uploadstash', 'patch-uploadstash.sql' ],
            [ 'addTable', 'user_former_groups', 'patch-user_former_groups.sql' ],

            // 1.19
            [ 'addIndex', 'logging', 'type_action', 'patch-logging-type-action-index.sql' ],
            [ 'addField', 'revision', 'rev_sha1', 'patch-rev_sha1.sql' ],
            [ 'doMigrateUserOptions' ],
            [ 'dropField', 'user', 'user_options', 'patch-drop-user_options.sql' ],
            [ 'addField', 'archive', 'ar_sha1', 'patch-ar_sha1.sql' ],
            [ 'addIndex', 'page', 'page_redirect_namespace_len',
                'patch-page_redirect_namespace_len.sql' ],
            [ 'addField', 'uploadstash', 'us_chunk_inx', 'patch-uploadstash_chunk.sql' ],
            [ 'addfield', 'job', 'job_timestamp', 'patch-jobs-add-timestamp.sql' ],

            // 1.20
            [ 'addIndex', 'revision', 'page_user_timestamp', 'patch-revision-user-page-index.sql' ],
            [ 'addField', 'ipblocks', 'ipb_parent_block_id', 'patch-ipb-parent-block-id.sql' ],
            [ 'addIndex', 'ipblocks', 'ipb_parent_block_id', 'patch-ipb-parent-block-id-index.sql' ],
            [ 'dropField', 'category', 'cat_hidden', 'patch-cat_hidden.sql' ],

            // 1.21
            [ 'addField', 'revision', 'rev_content_format', 'patch-revision-rev_content_format.sql' ],
            [ 'addField', 'revision', 'rev_content_model', 'patch-revision-rev_content_model.sql' ],
            [ 'addField', 'archive', 'ar_content_format', 'patch-archive-ar_content_format.sql' ],
            [ 'addField', 'archive', 'ar_content_model', 'patch-archive-ar_content_model.sql' ],
            [ 'addField', 'page', 'page_content_model', 'patch-page-page_content_model.sql' ],
            [ 'enableContentHandlerUseDB' ],
            [ 'dropField', 'site_stats', 'ss_admins', 'patch-drop-ss_admins.sql' ],
            [ 'dropField', 'recentchanges', 'rc_moved_to_title', 'patch-rc_moved.sql' ],
            [ 'addTable', 'sites', 'patch-sites.sql' ],
            [ 'addField', 'filearchive', 'fa_sha1', 'patch-fa_sha1.sql' ],
            [ 'addField', 'job', 'job_token', 'patch-job_token.sql' ],
            [ 'addField', 'job', 'job_attempts', 'patch-job_attempts.sql' ],
            [ 'doEnableProfiling' ],
            [ 'addField', 'uploadstash', 'us_props', 'patch-uploadstash-us_props.sql' ],
            [ 'modifyField', 'user_groups', 'ug_group', 'patch-ug_group-length-increase-255.sql' ],
            [ 'modifyField', 'user_former_groups', 'ufg_group',
                'patch-ufg_group-length-increase-255.sql' ],
            [ 'addIndex', 'page_props', 'pp_propname_page',
                'patch-page_props-propname-page-index.sql' ],
            [ 'addIndex', 'image', 'img_media_mime', 'patch-img_media_mime-index.sql' ],

            // 1.22
            [ 'doIwlinksIndexNonUnique' ],
            [ 'addIndex', 'iwlinks', 'iwl_prefix_from_title',
                'patch-iwlinks-from-title-index.sql' ],
            [ 'addField', 'archive', 'ar_id', 'patch-archive-ar_id.sql' ],
            [ 'addField', 'externallinks', 'el_id', 'patch-externallinks-el_id.sql' ],

            // 1.23
            [ 'addField', 'recentchanges', 'rc_source', 'patch-rc_source.sql' ],
            [ 'addIndex', 'logging', 'log_user_text_type_time',
                'patch-logging_user_text_type_time_index.sql' ],
            [ 'addIndex', 'logging', 'log_user_text_time', 'patch-logging_user_text_time_index.sql' ],
            [ 'addField', 'page', 'page_links_updated', 'patch-page_links_updated.sql' ],
            [ 'addField', 'user', 'user_password_expires', 'patch-user_password_expire.sql' ],

            // 1.24
            [ 'addField', 'page_props', 'pp_sortkey', 'patch-pp_sortkey.sql' ],
            [ 'dropField', 'recentchanges', 'rc_cur_time', 'patch-drop-rc_cur_time.sql' ],
            [ 'addIndex', 'watchlist', 'wl_user_notificationtimestamp',
                'patch-watchlist-user-notificationtimestamp-index.sql' ],
            [ 'addField', 'page', 'page_lang', 'patch-page_lang.sql' ],
            [ 'addField', 'pagelinks', 'pl_from_namespace', 'patch-pl_from_namespace.sql' ],
            [ 'addField', 'templatelinks', 'tl_from_namespace', 'patch-tl_from_namespace.sql' ],
            [ 'addField', 'imagelinks', 'il_from_namespace', 'patch-il_from_namespace.sql' ],
            [ 'modifyField', 'image', 'img_major_mime',
                'patch-img_major_mime-chemical.sql' ],
            [ 'modifyField', 'oldimage', 'oi_major_mime',
                'patch-oi_major_mime-chemical.sql' ],
            [ 'modifyField', 'filearchive', 'fa_major_mime',
                'patch-fa_major_mime-chemical.sql' ],

            // 1.25
            [ 'doUserNewTalkUseridUnsigned' ],
            // note this patch covers other _comment and _description fields too
            [ 'modifyField', 'recentchanges', 'rc_comment', 'patch-editsummary-length.sql' ],

            // 1.26
            [ 'dropTable', 'hitcounter' ],
            [ 'dropField', 'site_stats', 'ss_total_views', 'patch-drop-ss_total_views.sql' ],
            [ 'dropField', 'page', 'page_counter', 'patch-drop-page_counter.sql' ],

            // 1.27
            [ 'dropTable', 'msg_resource_links' ],
            [ 'dropTable', 'msg_resource' ],
            [ 'addTable', 'bot_passwords', 'patch-bot_passwords.sql' ],
            [ 'addField', 'watchlist', 'wl_id', 'patch-watchlist-wl_id.sql' ],
            [ 'dropIndex', 'categorylinks', 'cl_collation', 'patch-kill-cl_collation_index.sql' ],
            [ 'addIndex', 'categorylinks', 'cl_collation_ext',
                'patch-add-cl_collation_ext_index.sql' ],
            [ 'doCollationUpdate' ],

            // 1.28
            [ 'addIndex', 'recentchanges', 'rc_name_type_patrolled_timestamp',
                'patch-add-rc_name_type_patrolled_timestamp_index.sql' ],
            [ 'doRevisionPageRevIndexNonUnique' ],
            [ 'doNonUniquePlTlIl' ],
            [ 'addField', 'change_tag', 'ct_id', 'patch-change_tag-ct_id.sql' ],
            [ 'addField', 'tag_summary', 'ts_id', 'patch-tag_summary-ts_id.sql' ],
            [ 'modifyField', 'recentchanges', 'rc_ip', 'patch-rc_ip_modify.sql' ],
        ];
    }

    /**
     * 1.4 betas were missing the 'binary' marker from logging.log_title,
     * which causes a collation mismatch error on joins in MySQL 4.1.
     *
     * @param string $table Table name
     * @param string $field Field name to check
     * @param string $patchFile Path to the patch to correct the field
     * @return bool
     */
    protected function checkBin($table, $field, $patchFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check whether an index contain a field
     *
     * @param string $table Table name
     * @param string $index Index name to check
     * @param string $field Field that should be in the index
     * @return bool
     */
    protected function indexHasField($table, $index, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check that interwiki table exists; if it doesn't source it
     */
    protected function doInterwikiUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check that proper indexes are in place
     */
    protected function doIndexUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doOldLinksUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doFixAncientImagelinks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if we need to add talk page rows to the watchlist
     */
    public function doWatchlistUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function doSchemaRestructuring()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doNamespaceSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doPagelinksUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doUserUniqueUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doUserGroupsUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Make sure wl_notificationtimestamp can be NULL,
     * and update old broken items.
     */
    protected function doWatchlistNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set page_random field to a random value where it is equals to 0.
     *
     * @see bug 3946
     */
    protected function doPageRandomUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doTemplatelinksUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doBacklinkingIndicesUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adding page_restrictions table, obsoleting page.page_restrictions.
     * Migrating old restrictions to new table
     * -- Andrew Garrett, January 2007.
     */
    protected function doRestrictionsUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doCategorylinksIndicesUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doCategoryPopulation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doPopulateParentId()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doMaybeProfilingMemoryUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doFilearchiveIndicesUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doNonUniquePlTlIl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doUpdateMimeMinorField()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doClFieldsUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doLangLinksLengthUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doUserNewTalkTimestampNotNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doIwlinksIndexNonUnique()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doUserNewTalkUseridUnsigned()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function doRevisionPageRevIndexNonUnique()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getSchemaVars()
    {
        global $wgDBTableOptions;

        $vars = [];
        $vars['wgDBTableOptions'] = str_replace('TYPE', 'ENGINE', $wgDBTableOptions);
        $vars['wgDBTableOptions'] = str_replace(
            'CHARSET=mysql4',
            'CHARSET=binary',
            $vars['wgDBTableOptions']
        );

        return $vars;
    }
}
