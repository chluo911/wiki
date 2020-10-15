<?php

/**
 * Unit
 *
 * @package Less
 * @subpackage tree
 */
class Less_Tree_Unit extends Less_Tree{

	var $numerator = array();
	var $denominator = array();
	public $backupUnit;
	public $type = 'Unit';

    public function __construct($numerator = array(), $denominator = array(), $backupUnit = null ){
		$this->numerator = $numerator;
		$this->denominator = $denominator;
		$this->backupUnit = $backupUnit;
	}

    public function __clone(){
	}

    /**
     * @see Less_Tree::genCSS
     */
    public function genCSS( $output ){

		if( $this->numerator ){
			$output->add( $this->numerator[0] );
		}elseif( $this->denominator ){
			$output->add( $this->denominator[0] );
		}elseif( !Less_Parser::$options['strictUnits'] && $this->backupUnit ){
			$output->add( $this->backupUnit );
			return ;
		}
	}

    public function toString(){
		$returnStr = implode('*',$this->numerator);
		foreach($this->denominator as $d){
			$returnStr .= '/'.$d;
		}
		return $returnStr;
	}

    public function __toString(){
		return $this->toString();
	}


	/**
	 * @param Less_Tree_Unit $other
	 */
    public function compare($other) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function is($unitString){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function isLength(){
		$css = $this->toCSS();
		return !!preg_match('/px|em|%|in|cm|mm|pc|pt|ex/',$css);
	}

    public function isAngle() {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function isEmpty(){
		return !$this->numerator && !$this->denominator;
	}

    public function isSingular() {
		return count($this->numerator) <= 1 && !$this->denominator;
	}


    public function usedUnits(){
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
	}

    public function cancel(){
		$counter = array();
		$backup = null;

		foreach($this->numerator as $atomicUnit){
			if( !$backup ){
				$backup = $atomicUnit;
			}
			$counter[$atomicUnit] = ( isset($counter[$atomicUnit]) ? $counter[$atomicUnit] : 0) + 1;
		}

		foreach($this->denominator as $atomicUnit){
			if( !$backup ){
				$backup = $atomicUnit;
			}
			$counter[$atomicUnit] = ( isset($counter[$atomicUnit]) ? $counter[$atomicUnit] : 0) - 1;
		}

		$this->numerator = array();
		$this->denominator = array();

		foreach($counter as $atomicUnit => $count){
			if( $count > 0 ){
				for( $i = 0; $i < $count; $i++ ){
					$this->numerator[] = $atomicUnit;
				}
			}elseif( $count < 0 ){
				for( $i = 0; $i < -$count; $i++ ){
					$this->denominator[] = $atomicUnit;
				}
			}
		}

		if( !$this->numerator && !$this->denominator && $backup ){
			$this->backupUnit = $backup;
		}

		sort($this->numerator);
		sort($this->denominator);
	}


}

