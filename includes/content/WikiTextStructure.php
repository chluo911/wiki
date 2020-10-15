<?php

use HtmlFormatter\HtmlFormatter;

/**
 * Class allowing to explore structure of parsed wikitext.
 */
class WikiTextStructure
{
    /**
     * @var string
     */
    private $openingText;
    /**
     * @var string
     */
    private $allText;
    /**
     * @var string[]
     */
    private $auxText = [];
    /**
     * @var ParserOutput
     */
    private $parserOutput;

    /**
     * @var string[] selectors to elements that are excluded entirely from search
     */
    private $excludedElementSelectors = [
        'audio', 'video',       // "it looks like you don't have javascript enabled..."
                                // do not need to index
        'sup.reference',        // The [1] for references
        '.mw-cite-backlink',    // The â†? next to references in the references section
        'h1', 'h2', 'h3',       // Headings are already indexed in their own field.
        'h5', 'h6', 'h4',
        '.autocollapse',        // Collapsed fields are hidden by default so we don't want them
                                // showing up.
    ];

    /**
     * @var string[] selectors to elements that are considered auxiliary to article text for search
     */
    private $auxiliaryElementSelectors = [
        '.thumbcaption',        // Thumbnail captions aren't really part of the text proper
        'table',                // Neither are tables
        '.rellink',             // Common style for "See also:".
        '.dablink',             // Common style for calling out helpful links at the top
                                // of the article.
        '.searchaux',           // New class users can use to mark stuff as auxiliary to searches.
    ];

    /**
     * WikiTextStructure constructor.
     * @param ParserOutput $parserOutput
     */
    public function __construct(ParserOutput $parserOutput)
    {
        $this->parserOutput = $parserOutput;
    }

    /**
     * Get headings on the page.
     * @return string[]
     * First strip out things that look like references.  We can't use HTML filtering because
     * the references come back as <sup> tags without a class.  To keep from breaking stuff like
     *  ==Applicability of the strict massâ€“energy equivalence formula, ''E'' = ''mc''<sup>2</sup>==
     * we don't remove the whole <sup> tag.  We also don't want to strip the <sup> tag and remove
     * everything that looks like [2] because, I dunno, maybe there is a band named Word [2] Foo
     * or something.  Whatever.  So we only strip things that look like <sup> tags wrapping a
     * reference.  And since the data looks like:
     *      Reference in heading <sup>&#91;1&#93;</sup><sup>&#91;2&#93;</sup>
     * we can not really use HtmlFormatter as we have no suitable selector.
     */
    public function headings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse a message content into an array. This function is generally used to
     * parse settings stored as i18n messages (see search-ignored-headings).
     *
     * @param string $message
     * @return string[]
     */
    public static function parseSettingsInMessage($message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get list of heading to ignore.
     * @return string[]
     */
    private function getIgnoredHeadings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extract parts of the text - opening, main and auxiliary.
     */
    private function extractWikitextParts()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get text before first heading.
     * @param string $text
     * @return string|null
     */
    private function extractHeadingBeforeFirstHeading($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get opening text
     * @return string
     */
    public function getOpeningText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get main text
     * @return string
     */
    public function getMainText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get auxiliary text
     * @return string[]
     */
    public function getAuxiliaryText()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the defaultsort property
     * @return string|null
     */
    public function getDefaultSort()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
