<?php
/**
 * PostgreSQL-specific updater.
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
 * Class for handling updates to Postgres databases.
 *
 * @ingroup Deployment
 * @since 1.17
 */
class PostgresUpdater extends DatabaseUpdater
{

    /**
     * @var DatabasePostgres
     */
    protected $db;

    /**
     * @todo FIXME: Postgres should use sequential updates like Mysql, Sqlite
     * and everybody else. It never got refactored like it should've.
     * @return array
     */
    protected function getCoreUpdateList()
    {
        return [
            # rename tables 1.7.3
            # r15791 Change reserved word table names "user" and "text"
            [ 'renameTable', 'user', 'mwuser' ],
            [ 'renameTable', 'text', 'pagecontent' ],
            [ 'renameIndex', 'mwuser', 'user_pkey', 'mwuser_pkey' ],
            [ 'renameIndex', 'mwuser', 'user_user_name_key', 'mwuser_user_name_key' ],
            [ 'renameIndex', 'pagecontent', 'text_pkey', 'pagecontent_pkey' ],

            # renamed sequences
            [ 'renameSequence', 'ipblocks_ipb_id_val', 'ipblocks_ipb_id_seq' ],
            [ 'renameSequence', 'rev_rev_id_val', 'revision_rev_id_seq' ],
            [ 'renameSequence', 'text_old_id_val', 'text_old_id_seq' ],
            [ 'renameSequence', 'rc_rc_id_seq', 'recentchanges_rc_id_seq' ],
            [ 'renameSequence', 'log_log_id_seq', 'logging_log_id_seq' ],
            [ 'renameSequence', 'pr_id_val', 'page_restrictions_pr_id_seq' ],
            [ 'renameSequence', 'us_id_seq', 'uploadstash_us_id_seq' ],

            # since r58263
            [ 'renameSequence', 'category_id_seq', 'category_cat_id_seq' ],

            # new sequences if not renamed above
            [ 'addSequence', 'logging', false, 'logging_log_id_seq' ],
            [ 'addSequence', 'page_restrictions', false, 'page_restrictions_pr_id_seq' ],
            [ 'addSequence', 'filearchive', 'fa_id', 'filearchive_fa_id_seq' ],
            [ 'addSequence', 'archive', false, 'archive_ar_id_seq' ],
            [ 'addSequence', 'externallinks', false, 'externallinks_el_id_seq' ],
            [ 'addSequence', 'watchlist', false, 'watchlist_wl_id_seq' ],
            [ 'addSequence', 'change_tag', false, 'change_tag_ct_id_seq' ],
            [ 'addSequence', 'tag_summary', false, 'tag_summary_ts_id_seq' ],

            # new tables
            [ 'addTable', 'category', 'patch-category.sql' ],
            [ 'addTable', 'page', 'patch-page.sql' ],
            [ 'addTable', 'querycachetwo', 'patch-querycachetwo.sql' ],
            [ 'addTable', 'page_props', 'patch-page_props.sql' ],
            [ 'addTable', 'page_restrictions', 'patch-page_restrictions.sql' ],
            [ 'addTable', 'profiling', 'patch-profiling.sql' ],
            [ 'addTable', 'protected_titles', 'patch-protected_titles.sql' ],
            [ 'addTable', 'redirect', 'patch-redirect.sql' ],
            [ 'addTable', 'updatelog', 'patch-updatelog.sql' ],
            [ 'addTable', 'change_tag', 'patch-change_tag.sql' ],
            [ 'addTable', 'tag_summary', 'patch-tag_summary.sql' ],
            [ 'addTable', 'valid_tag', 'patch-valid_tag.sql' ],
            [ 'addTable', 'user_properties', 'patch-user_properties.sql' ],
            [ 'addTable', 'log_search', 'patch-log_search.sql' ],
            [ 'addTable', 'l10n_cache', 'patch-l10n_cache.sql' ],
            [ 'addTable', 'iwlinks', 'patch-iwlinks.sql' ],
            [ 'addTable', 'module_deps', 'patch-module_deps.sql' ],
            [ 'addTable', 'uploadstash', 'patch-uploadstash.sql' ],
            [ 'addTable', 'user_former_groups', 'patch-user_former_groups.sql' ],
            [ 'addTable', 'sites', 'patch-sites.sql' ],
            [ 'addTable', 'bot_passwords', 'patch-bot_passwords.sql' ],

            # Needed before new field
            [ 'convertArchive2' ],

            # new fields
            [ 'addPgField', 'updatelog', 'ul_value', 'TEXT' ],
            [ 'addPgField', 'archive', 'ar_deleted', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'archive', 'ar_len', 'INTEGER' ],
            [ 'addPgField', 'archive', 'ar_page_id', 'INTEGER' ],
            [ 'addPgField', 'archive', 'ar_parent_id', 'INTEGER' ],
            [ 'addPgField', 'archive', 'ar_content_model', 'TEXT' ],
            [ 'addPgField', 'archive', 'ar_content_format', 'TEXT' ],
            [ 'addPgField', 'categorylinks', 'cl_sortkey_prefix', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'categorylinks', 'cl_collation', "TEXT NOT NULL DEFAULT 0" ],
            [ 'addPgField', 'categorylinks', 'cl_type', "TEXT NOT NULL DEFAULT 'page'" ],
            [ 'addPgField', 'image', 'img_sha1', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'ipblocks', 'ipb_allow_usertalk', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'ipblocks', 'ipb_anon_only', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'ipblocks', 'ipb_by_text', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'ipblocks', 'ipb_block_email', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'ipblocks', 'ipb_create_account', 'SMALLINT NOT NULL DEFAULT 1' ],
            [ 'addPgField', 'ipblocks', 'ipb_deleted', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'ipblocks', 'ipb_enable_autoblock', 'SMALLINT NOT NULL DEFAULT 1' ],
            [ 'addPgField', 'ipblocks', 'ipb_parent_block_id',
                'INTEGER DEFAULT NULL REFERENCES ipblocks(ipb_id) ' .
                'ON DELETE SET NULL DEFERRABLE INITIALLY DEFERRED' ],
            [ 'addPgField', 'filearchive', 'fa_deleted', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'filearchive', 'fa_sha1', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'logging', 'log_deleted', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'logging', 'log_id',
                "INTEGER NOT NULL PRIMARY KEY DEFAULT nextval('logging_log_id_seq')" ],
            [ 'addPgField', 'logging', 'log_params', 'TEXT' ],
            [ 'addPgField', 'mwuser', 'user_editcount', 'INTEGER' ],
            [ 'addPgField', 'mwuser', 'user_newpass_time', 'TIMESTAMPTZ' ],
            [ 'addPgField', 'oldimage', 'oi_deleted', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'oldimage', 'oi_major_mime', "TEXT NOT NULL DEFAULT 'unknown'" ],
            [ 'addPgField', 'oldimage', 'oi_media_type', 'TEXT' ],
            [ 'addPgField', 'oldimage', 'oi_metadata', "BYTEA NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'oldimage', 'oi_minor_mime', "TEXT NOT NULL DEFAULT 'unknown'" ],
            [ 'addPgField', 'oldimage', 'oi_sha1', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'page', 'page_content_model', 'TEXT' ],
            [ 'addPgField', 'page_restrictions', 'pr_id',
                "INTEGER NOT NULL UNIQUE DEFAULT nextval('page_restrictions_pr_id_seq')" ],
            [ 'addPgField', 'profiling', 'pf_memory', 'NUMERIC(18,10) NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'recentchanges', 'rc_deleted', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'recentchanges', 'rc_log_action', 'TEXT' ],
            [ 'addPgField', 'recentchanges', 'rc_log_type', 'TEXT' ],
            [ 'addPgField', 'recentchanges', 'rc_logid', 'INTEGER NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'recentchanges', 'rc_new_len', 'INTEGER' ],
            [ 'addPgField', 'recentchanges', 'rc_old_len', 'INTEGER' ],
            [ 'addPgField', 'recentchanges', 'rc_params', 'TEXT' ],
            [ 'addPgField', 'redirect', 'rd_interwiki', 'TEXT NULL' ],
            [ 'addPgField', 'redirect', 'rd_fragment', 'TEXT NULL' ],
            [ 'addPgField', 'revision', 'rev_deleted', 'SMALLINT NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'revision', 'rev_len', 'INTEGER' ],
            [ 'addPgField', 'revision', 'rev_parent_id', 'INTEGER DEFAULT NULL' ],
            [ 'addPgField', 'revision', 'rev_content_model', 'TEXT' ],
            [ 'addPgField', 'revision', 'rev_content_format', 'TEXT' ],
            [ 'addPgField', 'site_stats', 'ss_active_users', "INTEGER DEFAULT '-1'" ],
            [ 'addPgField', 'user_newtalk', 'user_last_timestamp', 'TIMESTAMPTZ' ],
            [ 'addPgField', 'logging', 'log_user_text', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'logging', 'log_page', 'INTEGER' ],
            [ 'addPgField', 'interwiki', 'iw_api', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'interwiki', 'iw_wikiid', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'revision', 'rev_sha1', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'archive', 'ar_sha1', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'uploadstash', 'us_chunk_inx', "INTEGER NULL" ],
            [ 'addPgField', 'job', 'job_timestamp', "TIMESTAMPTZ" ],
            [ 'addPgField', 'job', 'job_random', "INTEGER NOT NULL DEFAULT 0" ],
            [ 'addPgField', 'job', 'job_attempts', "INTEGER NOT NULL DEFAULT 0" ],
            [ 'addPgField', 'job', 'job_token', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'job', 'job_token_timestamp', "TIMESTAMPTZ" ],
            [ 'addPgField', 'job', 'job_sha1', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'archive', 'ar_id',
                "INTEGER NOT NULL PRIMARY KEY DEFAULT nextval('archive_ar_id_seq')" ],
            [ 'addPgField', 'externallinks', 'el_id',
                "INTEGER NOT NULL PRIMARY KEY DEFAULT nextval('externallinks_el_id_seq')" ],
            [ 'addPgField', 'uploadstash', 'us_props', "BYTEA" ],

            # type changes
            [ 'changeField', 'archive', 'ar_deleted', 'smallint', '' ],
            [ 'changeField', 'archive', 'ar_minor_edit', 'smallint',
                'ar_minor_edit::smallint DEFAULT 0' ],
            [ 'changeField', 'filearchive', 'fa_deleted', 'smallint', '' ],
            [ 'changeField', 'filearchive', 'fa_height', 'integer', '' ],
            [ 'changeField', 'filearchive', 'fa_metadata', 'bytea', "decode(fa_metadata,'escape')" ],
            [ 'changeField', 'filearchive', 'fa_size', 'integer', '' ],
            [ 'changeField', 'filearchive', 'fa_width', 'integer', '' ],
            [ 'changeField', 'filearchive', 'fa_storage_group', 'text', '' ],
            [ 'changeField', 'filearchive', 'fa_storage_key', 'text', '' ],
            [ 'changeField', 'image', 'img_metadata', 'bytea', "decode(img_metadata,'escape')" ],
            [ 'changeField', 'image', 'img_size', 'integer', '' ],
            [ 'changeField', 'image', 'img_width', 'integer', '' ],
            [ 'changeField', 'image', 'img_height', 'integer', '' ],
            [ 'changeField', 'interwiki', 'iw_local', 'smallint', 'iw_local::smallint' ],
            [ 'changeField', 'interwiki', 'iw_trans', 'smallint', 'iw_trans::smallint DEFAULT 0' ],
            [ 'changeField', 'ipblocks', 'ipb_auto', 'smallint', 'ipb_auto::smallint DEFAULT 0' ],
            [ 'changeField', 'ipblocks', 'ipb_anon_only', 'smallint',
                "CASE WHEN ipb_anon_only=' ' THEN 0 ELSE ipb_anon_only::smallint END DEFAULT 0" ],
            [ 'changeField', 'ipblocks', 'ipb_create_account', 'smallint',
                "CASE WHEN ipb_create_account=' ' THEN 0 ELSE ipb_create_account::smallint END DEFAULT 1" ],
            [ 'changeField', 'ipblocks', 'ipb_enable_autoblock', 'smallint',
                "CASE WHEN ipb_enable_autoblock=' ' THEN 0 ELSE ipb_enable_autoblock::smallint END DEFAULT 1" ],
            [ 'changeField', 'ipblocks', 'ipb_block_email', 'smallint',
                "CASE WHEN ipb_block_email=' ' THEN 0 ELSE ipb_block_email::smallint END DEFAULT 0" ],
            [ 'changeField', 'ipblocks', 'ipb_address', 'text', 'ipb_address::text' ],
            [ 'changeField', 'ipblocks', 'ipb_deleted', 'smallint', 'ipb_deleted::smallint DEFAULT 0' ],
            [ 'changeField', 'mwuser', 'user_token', 'text', '' ],
            [ 'changeField', 'mwuser', 'user_email_token', 'text', '' ],
            [ 'changeField', 'objectcache', 'keyname', 'text', '' ],
            [ 'changeField', 'oldimage', 'oi_height', 'integer', '' ],
            [ 'changeField', 'oldimage', 'oi_metadata', 'bytea', "decode(img_metadata,'escape')" ],
            [ 'changeField', 'oldimage', 'oi_size', 'integer', '' ],
            [ 'changeField', 'oldimage', 'oi_width', 'integer', '' ],
            [ 'changeField', 'page', 'page_is_redirect', 'smallint',
                'page_is_redirect::smallint DEFAULT 0' ],
            [ 'changeField', 'page', 'page_is_new', 'smallint', 'page_is_new::smallint DEFAULT 0' ],
            [ 'changeField', 'querycache', 'qc_value', 'integer', '' ],
            [ 'changeField', 'querycachetwo', 'qcc_value', 'integer', '' ],
            [ 'changeField', 'recentchanges', 'rc_bot', 'smallint', 'rc_bot::smallint DEFAULT 0' ],
            [ 'changeField', 'recentchanges', 'rc_deleted', 'smallint', '' ],
            [ 'changeField', 'recentchanges', 'rc_minor', 'smallint', 'rc_minor::smallint DEFAULT 0' ],
            [ 'changeField', 'recentchanges', 'rc_new', 'smallint', 'rc_new::smallint DEFAULT 0' ],
            [ 'changeField', 'recentchanges', 'rc_type', 'smallint', 'rc_type::smallint DEFAULT 0' ],
            [ 'changeField', 'recentchanges', 'rc_patrolled', 'smallint',
                'rc_patrolled::smallint DEFAULT 0' ],
            [ 'changeField', 'revision', 'rev_deleted', 'smallint', 'rev_deleted::smallint DEFAULT 0' ],
            [ 'changeField', 'revision', 'rev_minor_edit', 'smallint',
                'rev_minor_edit::smallint DEFAULT 0' ],
            [ 'changeField', 'templatelinks', 'tl_namespace', 'smallint', 'tl_namespace::smallint' ],
            [ 'changeField', 'user_newtalk', 'user_ip', 'text', 'host(user_ip)' ],
            [ 'changeField', 'uploadstash', 'us_image_bits', 'smallint', '' ],
            [ 'changeField', 'profiling', 'pf_time', 'float', '' ],
            [ 'changeField', 'profiling', 'pf_memory', 'float', '' ],

            # null changes
            [ 'changeNullableField', 'oldimage', 'oi_bits', 'NULL' ],
            [ 'changeNullableField', 'oldimage', 'oi_timestamp', 'NULL' ],
            [ 'changeNullableField', 'oldimage', 'oi_major_mime', 'NULL' ],
            [ 'changeNullableField', 'oldimage', 'oi_minor_mime', 'NULL' ],
            [ 'changeNullableField', 'image', 'img_metadata', 'NOT NULL' ],
            [ 'changeNullableField', 'filearchive', 'fa_metadata', 'NOT NULL' ],
            [ 'changeNullableField', 'recentchanges', 'rc_cur_id', 'NULL' ],
            [ 'changeNullableField', 'recentchanges', 'rc_cur_time', 'NULL' ],

            [ 'checkOiDeleted' ],

            # New indexes
            [ 'addPgIndex', 'archive', 'archive_user_text', '(ar_user_text)' ],
            [ 'addPgIndex', 'image', 'img_sha1', '(img_sha1)' ],
            [ 'addPgIndex', 'ipblocks', 'ipb_parent_block_id', '(ipb_parent_block_id)' ],
            [ 'addPgIndex', 'oldimage', 'oi_sha1', '(oi_sha1)' ],
            [ 'addPgIndex', 'page', 'page_mediawiki_title', '(page_title) WHERE page_namespace = 8' ],
            [ 'addPgIndex', 'pagelinks', 'pagelinks_title', '(pl_title)' ],
            [ 'addPgIndex', 'page_props', 'pp_propname_page', '(pp_propname, pp_page)' ],
            [ 'addPgIndex', 'revision', 'rev_text_id_idx', '(rev_text_id)' ],
            [ 'addPgIndex', 'recentchanges', 'rc_timestamp_bot', '(rc_timestamp) WHERE rc_bot = 0' ],
            [ 'addPgIndex', 'templatelinks', 'templatelinks_from', '(tl_from)' ],
            [ 'addPgIndex', 'watchlist', 'wl_user', '(wl_user)' ],
            [ 'addPgIndex', 'watchlist', 'wl_user_notificationtimestamp',
                '(wl_user, wl_notificationtimestamp)' ],
            [ 'addPgIndex', 'logging', 'logging_user_type_time',
                '(log_user, log_type, log_timestamp)' ],
            [ 'addPgIndex', 'logging', 'logging_page_id_time', '(log_page,log_timestamp)' ],
            [ 'addPgIndex', 'iwlinks', 'iwl_prefix_from_title', '(iwl_prefix, iwl_from, iwl_title)' ],
            [ 'addPgIndex', 'iwlinks', 'iwl_prefix_title_from', '(iwl_prefix, iwl_title, iwl_from)' ],
            [ 'addPgIndex', 'job', 'job_timestamp_idx', '(job_timestamp)' ],
            [ 'addPgIndex', 'job', 'job_sha1', '(job_sha1)' ],
            [ 'addPgIndex', 'job', 'job_cmd_token', '(job_cmd, job_token, job_random)' ],
            [ 'addPgIndex', 'job', 'job_cmd_token_id', '(job_cmd, job_token, job_id)' ],
            [ 'addPgIndex', 'filearchive', 'fa_sha1', '(fa_sha1)' ],
            [ 'addPgIndex', 'logging', 'logging_user_text_type_time',
                '(log_user_text, log_type, log_timestamp)' ],
            [ 'addPgIndex', 'logging', 'logging_user_text_time', '(log_user_text, log_timestamp)' ],

            [ 'checkIndex', 'pagelink_unique', [
                [ 'pl_from', 'int4_ops', 'btree', 0 ],
                [ 'pl_namespace', 'int2_ops', 'btree', 0 ],
                [ 'pl_title', 'text_ops', 'btree', 0 ],
            ],
                'CREATE UNIQUE INDEX pagelink_unique ON pagelinks (pl_from,pl_namespace,pl_title)' ],
            [ 'checkIndex', 'cl_sortkey', [
                [ 'cl_to', 'text_ops', 'btree', 0 ],
                [ 'cl_sortkey', 'text_ops', 'btree', 0 ],
                [ 'cl_from', 'int4_ops', 'btree', 0 ],
            ],
                'CREATE INDEX cl_sortkey ON "categorylinks" ' .
                    'USING "btree" ("cl_to", "cl_sortkey", "cl_from")' ],
            [ 'checkIndex', 'iwl_prefix_title_from', [
                [ 'iwl_prefix', 'text_ops', 'btree', 0 ],
                [ 'iwl_title', 'text_ops', 'btree', 0 ],
                [ 'iwl_from', 'int4_ops', 'btree', 0 ],
            ],
            'CREATE INDEX iwl_prefix_title_from ON "iwlinks" ' .
                'USING "btree" ("iwl_prefix", "iwl_title", "iwl_from")' ],
            [ 'checkIndex', 'logging_times', [
                [ 'log_timestamp', 'timestamptz_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "logging_times" ON "logging" USING "btree" ("log_timestamp")' ],
            [ 'dropIndex', 'oldimage', 'oi_name' ],
            [ 'checkIndex', 'oi_name_archive_name', [
                [ 'oi_name', 'text_ops', 'btree', 0 ],
                [ 'oi_archive_name', 'text_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "oi_name_archive_name" ON "oldimage" ' .
                'USING "btree" ("oi_name", "oi_archive_name")' ],
            [ 'checkIndex', 'oi_name_timestamp', [
                [ 'oi_name', 'text_ops', 'btree', 0 ],
                [ 'oi_timestamp', 'timestamptz_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "oi_name_timestamp" ON "oldimage" ' .
                'USING "btree" ("oi_name", "oi_timestamp")' ],
            [ 'checkIndex', 'page_main_title', [
                [ 'page_title', 'text_pattern_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "page_main_title" ON "page" ' .
                'USING "btree" ("page_title" "text_pattern_ops") WHERE ("page_namespace" = 0)' ],
            [ 'checkIndex', 'page_mediawiki_title', [
                [ 'page_title', 'text_pattern_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "page_mediawiki_title" ON "page" ' .
                'USING "btree" ("page_title" "text_pattern_ops") WHERE ("page_namespace" = 8)' ],
            [ 'checkIndex', 'page_project_title', [
                [ 'page_title', 'text_pattern_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "page_project_title" ON "page" ' .
                'USING "btree" ("page_title" "text_pattern_ops") ' .
                'WHERE ("page_namespace" = 4)' ],
            [ 'checkIndex', 'page_talk_title', [
                [ 'page_title', 'text_pattern_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "page_talk_title" ON "page" ' .
                'USING "btree" ("page_title" "text_pattern_ops") ' .
                'WHERE ("page_namespace" = 1)' ],
            [ 'checkIndex', 'page_user_title', [
                [ 'page_title', 'text_pattern_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "page_user_title" ON "page" ' .
                'USING "btree" ("page_title" "text_pattern_ops") WHERE ' .
                '("page_namespace" = 2)' ],
            [ 'checkIndex', 'page_utalk_title', [
                [ 'page_title', 'text_pattern_ops', 'btree', 0 ],
            ],
            'CREATE INDEX "page_utalk_title" ON "page" ' .
                'USING "btree" ("page_title" "text_pattern_ops") ' .
                'WHERE ("page_namespace" = 3)' ],
            [ 'checkIndex', 'ts2_page_text', [
                [ 'textvector', 'tsvector_ops', 'gist', 0 ],
            ],
            'CREATE INDEX "ts2_page_text" ON "pagecontent" USING "gist" ("textvector")' ],
            [ 'checkIndex', 'ts2_page_title', [
                [ 'titlevector', 'tsvector_ops', 'gist', 0 ],
            ],
            'CREATE INDEX "ts2_page_title" ON "page" USING "gist" ("titlevector")' ],

            [ 'checkOiNameConstraint' ],
            [ 'checkPageDeletedTrigger' ],
            [ 'checkRevUserFkey' ],
            [ 'dropIndex', 'ipblocks', 'ipb_address' ],
            [ 'checkIndex', 'ipb_address_unique', [
                [ 'ipb_address', 'text_ops', 'btree', 0 ],
                [ 'ipb_user', 'int4_ops', 'btree', 0 ],
                [ 'ipb_auto', 'int2_ops', 'btree', 0 ],
                [ 'ipb_anon_only', 'int2_ops', 'btree', 0 ],
            ],
            'CREATE UNIQUE INDEX ipb_address_unique ' .
                'ON ipblocks (ipb_address,ipb_user,ipb_auto,ipb_anon_only)' ],

            [ 'checkIwlPrefix' ],

            # All FK columns should be deferred
            [ 'changeFkeyDeferrable', 'archive', 'ar_user', 'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'categorylinks', 'cl_from', 'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'externallinks', 'el_from', 'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'filearchive', 'fa_deleted_user',
                'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'filearchive', 'fa_user', 'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'image', 'img_user', 'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'imagelinks', 'il_from', 'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'ipblocks', 'ipb_by', 'mwuser(user_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'ipblocks', 'ipb_user', 'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'ipblocks', 'ipb_parent_block_id',
                'ipblocks(ipb_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'langlinks', 'll_from', 'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'logging', 'log_user', 'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'oldimage', 'oi_name',
                'image(img_name) ON DELETE CASCADE ON UPDATE CASCADE' ],
            [ 'changeFkeyDeferrable', 'oldimage', 'oi_user', 'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'pagelinks', 'pl_from', 'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'page_props', 'pp_page', 'page (page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'page_restrictions', 'pr_page',
                'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'protected_titles', 'pt_user',
                'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'recentchanges', 'rc_user',
                'mwuser(user_id) ON DELETE SET NULL' ],
            [ 'changeFkeyDeferrable', 'redirect', 'rd_from', 'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'revision', 'rev_page', 'page (page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'revision', 'rev_user', 'mwuser(user_id) ON DELETE RESTRICT' ],
            [ 'changeFkeyDeferrable', 'templatelinks', 'tl_from', 'page(page_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'user_groups', 'ug_user', 'mwuser(user_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'user_newtalk', 'user_id', 'mwuser(user_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'user_properties', 'up_user',
                'mwuser(user_id) ON DELETE CASCADE' ],
            [ 'changeFkeyDeferrable', 'watchlist', 'wl_user', 'mwuser(user_id) ON DELETE CASCADE' ],

            # r81574
            [ 'addInterwikiType' ],
            # end
            [ 'tsearchFixes' ],

            // 1.23
            [ 'addPgField', 'recentchanges', 'rc_source', "TEXT NOT NULL DEFAULT ''" ],
            [ 'addPgField', 'page', 'page_links_updated', "TIMESTAMPTZ NULL" ],
            [ 'addPgField', 'mwuser', 'user_password_expires', 'TIMESTAMPTZ NULL' ],
            [ 'changeFieldPurgeTable', 'l10n_cache', 'lc_value', 'bytea',
                "replace(lc_value,'\','\\\\')::bytea" ],
            // 1.23.9
            [ 'rebuildTextSearch' ],

            // 1.24
            [ 'addPgField', 'page_props', 'pp_sortkey', 'float NULL' ],
            [ 'addPgIndex', 'page_props', 'pp_propname_sortkey_page',
                    '( pp_propname, pp_sortkey, pp_page ) WHERE ( pp_sortkey IS NOT NULL )' ],
            [ 'addPgField', 'page', 'page_lang', 'TEXT default NULL' ],
            [ 'addPgField', 'pagelinks', 'pl_from_namespace', 'INTEGER NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'templatelinks', 'tl_from_namespace', 'INTEGER NOT NULL DEFAULT 0' ],
            [ 'addPgField', 'imagelinks', 'il_from_namespace', 'INTEGER NOT NULL DEFAULT 0' ],

            // 1.25
            [ 'dropTable', 'hitcounter' ],
            [ 'dropField', 'site_stats', 'ss_total_views', 'patch-drop-ss_total_views.sql' ],
            [ 'dropField', 'page', 'page_counter', 'patch-drop-page_counter.sql' ],
            [ 'dropFkey', 'recentchanges', 'rc_cur_id' ],

            // 1.27
            [ 'dropTable', 'msg_resource_links' ],
            [ 'dropTable', 'msg_resource' ],
            [
                'addPgField', 'watchlist', 'wl_id',
                "INTEGER NOT NULL PRIMARY KEY DEFAULT nextval('watchlist_wl_id_seq')"
            ],

            // 1.28
            [ 'addPgIndex', 'recentchanges', 'rc_name_type_patrolled_timestamp',
                '( rc_namespace, rc_type, rc_patrolled, rc_timestamp )' ],
            [ 'addPgField', 'change_tag', 'ct_id',
                "INTEGER NOT NULL PRIMARY KEY DEFAULT nextval('change_tag_ct_id_seq')" ],
            [ 'addPgField', 'tag_summary', 'ts_id',
                "INTEGER NOT NULL PRIMARY KEY DEFAULT nextval('tag_summary_ts_id_seq')" ],
        ];
    }

    protected function getOldGlobalUpdates()
    {
        global $wgExtNewTables, $wgExtPGNewFields, $wgExtPGAlteredFields, $wgExtNewIndexes;

        $updates = [];

        # Add missing extension tables
        foreach ($wgExtNewTables as $tableRecord) {
            $updates[] = [
                'addTable', $tableRecord[0], $tableRecord[1], true
            ];
        }

        # Add missing extension fields
        foreach ($wgExtPGNewFields as $fieldRecord) {
            $updates[] = [
                'addPgField', $fieldRecord[0], $fieldRecord[1],
                $fieldRecord[2]
            ];
        }

        # Change altered columns
        foreach ($wgExtPGAlteredFields as $fieldRecord) {
            $updates[] = [
                'changeField', $fieldRecord[0], $fieldRecord[1],
                $fieldRecord[2]
            ];
        }

        # Add missing extension indexes
        foreach ($wgExtNewIndexes as $fieldRecord) {
            $updates[] = [
                'addPgExtIndex', $fieldRecord[0], $fieldRecord[1],
                $fieldRecord[2]
            ];
        }

        return $updates;
    }

    protected function describeTable($table)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function describeIndex($idx)
    {
        // first fetch the key (which is a list of columns ords) and
        // the table the index applies to (an oid)
        $q = <<<END
SELECT indkey, indrelid FROM pg_namespace, pg_class, pg_index
	WHERE nspname=%s
	  AND pg_class.relnamespace = pg_namespace.oid
	  AND relname=%s
	  AND indexrelid=pg_class.oid
END;
        $res = $this->db->query(
            sprintf(
                $q,
                $this->db->addQuotes($this->db->getCoreSchema()),
                $this->db->addQuotes($idx)
            )
        );
        if (!$res) {
            return null;
        }
        $r = $this->db->fetchRow($res);
        if (!$r) {
            return null;
        }

        $indkey = $r[0];
        $relid = intval($r[1]);
        $indkeys = explode(' ', $indkey);

        $colnames = [];
        foreach ($indkeys as $rid) {
            $query = <<<END
SELECT attname FROM pg_class, pg_attribute
	WHERE attrelid=$relid
	  AND attnum=%d
	  AND attrelid=pg_class.oid
END;
            $r2 = $this->db->query(sprintf($query, $rid));
            if (!$r2) {
                return null;
            }
            $row2 = $this->db->fetchRow($r2);
            if (!$row2) {
                return null;
            }
            $colnames[] = $row2[0];
        }

        return $colnames;
    }

    public function fkeyDeltype($fkey)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function ruleDef($table, $rule)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function addSequence($table, $pkey, $ns)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function renameSequence($old, $new)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function renameTable($old, $new, $patch = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function renameIndex(
        $table,
        $old,
        $new,
        $skipBothIndexExistWarning = false,
        $a = false,
        $b = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function addPgField($table, $field, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function changeField($table, $field, $newtype, $default)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function changeFieldPurgeTable($table, $field, $newtype, $default)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setDefault($table, $field, $default)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function changeNullableField($table, $field, $null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addPgIndex($table, $index, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addPgExtIndex($table, $index, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function dropFkey($table, $field)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function changeFkeyDeferrable($table, $field, $clause)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function convertArchive2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function checkOiDeleted()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function checkOiNameConstraint()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function checkPageDeletedTrigger()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function dropIndex($table, $index, $patch = '', $fullpath = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function checkIndex($index, $should_be, $good_def)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function checkRevUserFkey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function checkIwlPrefix()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function addInterwikiType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tsearchFixes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function rebuildTextSearch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
