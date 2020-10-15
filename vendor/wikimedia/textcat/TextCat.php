<?php

/**
 * TextCat language classifier
 * See http://odur.let.rug.nl/~vannoord/TextCat/
 */
class TextCat {

	/**
	 * Number of ngrams to be used.
	 * @var int
	 */
	private $maxNgrams = 3000;

	/**
	 * Minimum frequency of ngram to be counted.
	 * ( For language model generation set this
	 *   >0 to decrease CPU and memory reqs. )
	 * @var int
	 */
	private $minFreq = 0;

	/**
	 * Regexp used as word separator
	 * @var string
	 */
	private $wordSeparator = '0-9\s\(\)';

	/**
	 * List of language files
	 * @var string[]
	 */
	private $langFiles = array();

	/**
	 * @param int $maxNgrams
	 */
	public function setMaxNgrams( $maxNgrams ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * @param int $minFreq
	 */
	public function setMinFreq( $minFreq ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * @param string $dir
	 */
	public function __construct( $dir = null ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Create ngrams list for text.
	 * @param string $text
	 * @param int $maxNgrams How many ngrams to use.
	 * @return int[]
	 */
	public function createLM( $text, $maxNgrams ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Load data from language file.
	 * @param string $langFile
	 * @return int[] Language file data
	 */
	public function loadLanguageFile( $langFile ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Write ngrams to file in PHP format
	 * @param int[] $ngrams
	 * @param string $outfile Output filename
	 */
	public function writeLanguageFile( $ngrams, $outfile ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * Classify text.
	 * @param string $text
	 * @param string[] $candidates List of candidate languages.
	 * @return int[] Array with keys of language names and values of score.
	 * 				 Sorted by ascending score, with first result being the best.
	 */
	public function classify( $text, $candidates = null ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}
}

