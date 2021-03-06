<?php

class vEngine {

	protected $_template = '';
	protected $_content = array();

	public function __construct($template) {
		$this->_template = $template;
	}

	public function addContent( $name,$content ) {
		$this->_content[$name] = $content;
		return true;
	}

	public function toList($array) {
		foreach ($array as $value){
			$item[] = "<li>" . $value . "</li>";
		}
		$bunch = implode("", $item);
		return $bunch;
	}

	public function flatten($nestArray) {
		foreach ($nestArray as $name => $info) {
			$whole[] = "<b>" . $name . "</b>";
		foreach ( $info as $attrName => $attrValue ) {
			if ($attrValue == NULL) {
				$whole[] = "<li>" . $attrName . " " . "<i>Unknown</i>" . "</li>";
			} else {
				$whole[] = "<li>" . $attrName . " " . $attrValue . "</li>";
			}
			}
		}
		$string =  implode($whole);
		return $string;
	}

	public function view() {
		extract( $this->_content,EXTR_PREFIX_ALL,'_' );
		$output = require $this->_template;
		return $output;
	}


}