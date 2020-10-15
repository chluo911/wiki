<?php
/**
 * Performs transformations of HTML by wrapping around libxml2 and working
 * around its countless bugs.
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
 */

namespace HtmlFormatter;

class HtmlFormatter {
	/**
	 * @var DOMDocument
	 */
	private $doc;

	private $html;
	private $itemsToRemove = [];
	private $elementsToFlatten = [];
	protected $removeMedia = false;

	/**
	 * Constructor
	 *
	 * @param string $html Text to process
	 */
	public function __construct( $html ) {
		$this->html = $html;
	}

	/**
	 * Turns a chunk of HTML into a proper document
	 * @param string $html
	 * @return string
	 */
	public static function wrapHTML( $html ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Override this in descendant class to modify HTML after it has been converted from DOM tree
	 * @param string $html HTML to process
	 * @return string Processed HTML
	 */
	protected function onHtmlReady( $html ) {
		return $html;
	}

	/**
	 * @return DOMDocument DOM to manipulate
	 */
	public function getDoc() {
		if ( !$this->doc ) {
			// DOMDocument::loadHTML apparently isn't very good with encodings, so
			// convert input to ASCII by encoding everything above 128 as entities.
			$html = \mb_convert_encoding( $this->html, 'HTML-ENTITIES', 'UTF-8' );

			// Workaround for bug that caused spaces before references
			// to disappear during processing: https://phabricator.wikimedia.org/T55086
			$html = str_replace( ' <', '&#32;<', $html );

			\libxml_use_internal_errors( true );
			$loader = \libxml_disable_entity_loader();
			$this->doc = new \DOMDocument();
			$this->doc->strictErrorChecking = false;
			$this->doc->loadHTML( $html );
			\libxml_disable_entity_loader( $loader );
			\libxml_use_internal_errors( false );
			$this->doc->encoding = 'UTF-8';
		}
		return $this->doc;
	}

	/**
	 * Sets whether images/videos/sounds should be removed from output
	 * @param bool $flag
	 */
	public function setRemoveMedia( $flag = true ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Adds one or more selector of content to remove. A subset of CSS selector
	 * syntax is supported:
	 *
	 *   <tag>
	 *   <tag>.class
	 *   .<class>
	 *   #<id>
	 *
	 * @param array|string $selectors Selector(s) of stuff to remove
	 */
	public function remove( $selectors ) {
		$this->itemsToRemove = array_merge( $this->itemsToRemove, (array)$selectors );
	}

	/**
	 * Adds one or more element name to the list to flatten (remove tag, but not its content)
	 * Can accept undelimited regexes
	 *
	 * Note this interface may fail in surprising unexpected ways due to usage of regexes,
	 * so should not be relied on for HTML markup security measures.
	 *
	 * @param array|string $elements Name(s) of tag(s) to flatten
	 */
	public function flatten( $elements ) {
		$this->elementsToFlatten = array_merge( $this->elementsToFlatten, (array)$elements );
	}

	/**
	 * Instructs the formatter to flatten all tags
	 */
	public function flattenAllTags() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Removes content we've chosen to remove.  The text of the removed elements can be
	 * extracted with the getText method.
	 * @return array Array of removed DOMElements
	 */
	public function filterContent() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Removes a list of elelments from DOMDocument
	 * @param array|DOMNodeList $elements
	 * @return array Array of removed elements
	 */
	private function removeElements( $elements ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * libxml in its usual pointlessness converts many chars to entities - this function
	 * perfoms a reverse conversion
	 * @param string $html
	 * @return string
	 */
	private function fixLibXML( $html ) {
		// We don't include rules like '&#34;' => '&amp;quot;' because entities had already been
		// normalized by libxml. Using this function with input not sanitized by libxml is UNSAFE!
		$replacements = [
			'&quot;' => '&amp;quot;',
			'&amp;' => '&amp;amp;',
			'&lt;' => '&amp;lt;',
			'&gt;' => '&amp;gt;',
		];
		$html = strtr( $html, $replacements );

		if ( \function_exists( 'mb_convert_encoding' ) ) {
			// Just in case the conversion in getDoc() above used named
			// entities that aren't known to html_entity_decode().
			$html = \mb_convert_encoding( $html, 'UTF-8', 'HTML-ENTITIES' );
		} else {
			$html = \html_entity_decode( $html, ENT_COMPAT, 'utf-8' );
		}
		return $html;
	}

	/**
	 * Performs final transformations and returns resulting HTML.  Note that if you want to call this
	 * both without an element and with an element you should call it without an element first.  If you
	 * specify the $element in the method it'll change the underlying dom and you won't be able to get
	 * it back.
	 *
	 * @param DOMElement|string|null $element ID of element to get HTML from or
	 *   false to get it from the whole tree
	 * @return string Processed HTML
	 */
	public function getText( $element = null ) {

		if ( $this->doc ) {
			if ( $element !== null && !( $element instanceof \DOMElement ) ) {
				$element = $this->doc->getElementById( $element );
			}
			if ( $element ) {
				$body = $this->doc->getElementsByTagName( 'body' )->item( 0 );
				$nodesArray = [];
				foreach ( $body->childNodes as $node ) {
					$nodesArray[] = $node;
				}
				foreach ( $nodesArray as $nodeArray ) {
					$body->removeChild( $nodeArray );
				}
				$body->appendChild( $element );
			}
			$html = $this->doc->saveHTML();

			$html = $this->fixLibXml( $html );
			if ( PHP_EOL === "\r\n" ) {
				// Cleanup for CRLF misprocessing of unknown origin on Windows.
				$html = str_replace( '&#13;', '', $html );
			}
		} else {
			$html = $this->html;
		}
		// Remove stuff added by wrapHTML()
		$html = \preg_replace( '/<!--.*?-->|^.*?<body>|<\/body>.*$/s', '', $html );
		$html = $this->onHtmlReady( $html );

		if ( $this->elementsToFlatten ) {
			$elements = \implode( '|', $this->elementsToFlatten );
			$html = \preg_replace( "#</?($elements)\\b[^>]*>#is", '', $html );
		}

		return $html;
	}

	/**
	 * Helper function for parseItemsToRemove(). This function extracts the selector type
	 * and the raw name of a selector from a CSS-style selector string and assigns those
	 * values to parameters passed by reference. For example, if given '#toc' as the
	 * $selector parameter, it will assign 'ID' as the $type and 'toc' as the $rawName.
	 * @param string $selector CSS selector to parse
	 * @param string $type The type of selector (ID, CLASS, TAG_CLASS, or TAG)
	 * @param string $rawName The raw name of the selector
	 * @return bool Whether the selector was successfully recognised
	 * @throws MWException
	 */
	protected function parseSelector( $selector, &$type, &$rawName ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Transforms CSS-style selectors into an internal representation suitable for
	 * processing by filterContent()
	 * @return array
	 */
	protected function parseItemsToRemove() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}
