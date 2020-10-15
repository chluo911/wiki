<?php
/**
 * Tag hooks provided by MediaWiki core
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
 * @ingroup Parser
 */

/**
 * Various tag hooks, registered in Parser::firstCallInit()
 * @ingroup Parser
 */
class CoreTagHooks
{
    /**
     * @param Parser $parser
     * @return void
     */
    public static function register($parser)
    {
        global $wgRawHtml;
        $parser->setHook('pre', [ __CLASS__, 'pre' ]);
        $parser->setHook('nowiki', [ __CLASS__, 'nowiki' ]);
        $parser->setHook('gallery', [ __CLASS__, 'gallery' ]);
        $parser->setHook('indicator', [ __CLASS__, 'indicator' ]);
        if ($wgRawHtml) {
            $parser->setHook('html', [ __CLASS__, 'html' ]);
        }
    }

    /**
     * Core parser tag hook function for 'pre'.
     * Text is treated roughly as 'nowiki' wrapped in an HTML 'pre' tag;
     * valid HTML attributes are passed on.
     *
     * @param string $text
     * @param array $attribs
     * @param Parser $parser
     * @return string HTML
     */
    public static function pre($text, $attribs, $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Core parser tag hook function for 'html', used only when
     * $wgRawHtml is enabled.
     *
     * This is potentially unsafe and should be used only in very careful
     * circumstances, as the contents are emitted as raw HTML.
     *
     * Uses undocumented extended tag hook return values, introduced in r61913.
     *
     * @param string $content
     * @param array $attributes
     * @param Parser $parser
     * @throws MWException
     * @return array
     */
    public static function html($content, $attributes, $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Core parser tag hook function for 'nowiki'. Text within this section
     * gets interpreted as a string of text with HTML-compatible character
     * references, and wiki markup within it will not be expanded.
     *
     * Uses undocumented extended tag hook return values, introduced in r61913.
     *
     * @param string $content
     * @param array $attributes
     * @param Parser $parser
     * @return array
     */
    public static function nowiki($content, $attributes, $parser)
    {
        $content = strtr($content, [
            // lang converter
            '-{' => '-&#123;',
            '}-' => '&#125;-',
            // html tags
            '<' => '&lt;',
            '>' => '&gt;'
            // Note: Both '"' and '&' are not converted.
            // This allows strip markers and entities through.
        ]);
        return [ $content, 'markerType' => 'nowiki' ];
    }

    /**
     * Core parser tag hook function for 'gallery'.
     *
     * Renders a thumbnail list of the given images, with optional captions.
     * Full syntax documented on the wiki:
     *
     *   https://www.mediawiki.org/wiki/Help:Images#Gallery_syntax
     *
     * @todo break Parser::renderImageGallery out here too.
     *
     * @param string $content
     * @param array $attributes
     * @param Parser $parser
     * @return string HTML
     */
    public static function gallery($content, $attributes, $parser)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * XML-style tag for page status indicators: icons (or short text snippets) usually displayed in
     * the top-right corner of the page, outside of the main content.
     *
     * @param string $content
     * @param array $attributes
     * @param Parser $parser
     * @param PPFrame $frame
     * @return string
     * @since 1.25
     */
    public static function indicator($content, array $attributes, Parser $parser, PPFrame $frame)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
