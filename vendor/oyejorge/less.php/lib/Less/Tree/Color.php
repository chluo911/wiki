<?php

/**
 * Color
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Color extends Less_Tree{
	public $rgb;
	public $alpha;
	public $isTransparentKeyword;
	public $type = 'Color';

	public function __construct($rgb, $a = 1, $isTransparentKeyword = null ){

		if( $isTransparentKeyword ){
			$this->rgb = $rgb;
			$this->alpha = $a;
			$this->isTransparentKeyword = true;
			return;
		}

		$this->rgb = array();
		if( is_array($rgb) ){
			$this->rgb = $rgb;
		}else if( strlen($rgb) == 6 ){
			foreach(str_split($rgb, 2) as $c){
				$this->rgb[] = hexdec($c);
			}
		}else{
			foreach(str_split($rgb, 1) as $c){
				$this->rgb[] = hexdec($c.$c);
			}
		}
		$this->alpha = is_numeric($a) ? $a : 1;
	}

	public function compile(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function luma(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	/**
	 * @see Less_Tree::genCSS
	 */
	public function genCSS( $output ){
		$output->add( $this->toCSS() );
	}

	public function toCSS( $doNotCompress = false ){
		$compress = Less_Parser::$options['compress'] && !$doNotCompress;
		$alpha = Less_Functions::fround( $this->alpha );


		//
		// If we have some transparency, the only way to represent it
		// is via `rgba`. Otherwise, we use the hex representation,
		// which has better compatibility with older browsers.
		// Values are capped between `0` and `255`, rounded and zero-padded.
		//
		if( $alpha < 1 ){
			if( ( $alpha === 0 || $alpha === 0.0 ) && isset($this->isTransparentKeyword) && $this->isTransparentKeyword ){
				return 'transparent';
			}

			$values = array();
			foreach($this->rgb as $c){
				$values[] = Less_Functions::clamp( round($c), 255);
			}
			$values[] = $alpha;

			$glue = ($compress ? ',' : ', ');
			return "rgba(" . implode($glue, $values) . ")";
		}else{

			$color = $this->toRGB();

			if( $compress ){

				// Convert color to short format
				if( $color[1] === $color[2] && $color[3] === $color[4] && $color[5] === $color[6]) {
					$color = '#'.$color[1] . $color[3] . $color[5];
				}
			}

			return $color;
		}
	}

	//
	// Operations have to be done per-channel, if not,
	// channels will spill onto each other. Once we have
	// our result, in the form of an integer triplet,
	// we create a new Color node to hold the result.
	//

	/**
	 * @param string $op
	 */
	public function operate( $op, $other) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function toRGB(){
		return $this->toHex($this->rgb);
	}

	public function toHSL(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	//Adapted from http://mjijackson.com/2008/02/rgb-to-hsl-and-rgb-to-hsv-color-model-conversion-algorithms-in-javascript
    public function toHSV() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function toARGB(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

	public function compare($x){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function toHex( $v ){

		$ret = '#';
		foreach($v as $c){
			$c = Less_Functions::clamp( Less_Parser::round($c), 255);
			if( $c < 16 ){
				$ret .= '0';
			}
			$ret .= dechex($c);
		}

		return $ret;
	}


	/**
	 * @param string $keyword
	 */
	public static function fromKeyword( $keyword ){
		$keyword = strtolower($keyword);

		if( Less_Colors::hasOwnProperty($keyword) ){
			// detect named color
			return new Less_Tree_Color(substr(Less_Colors::color($keyword), 1));
		}

		if( $keyword === 'transparent' ){
			return new Less_Tree_Color( array(0, 0, 0), 0, true);
		}
	}

}
