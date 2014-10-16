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
		foreach ($array as $value) {
			return $value;
		}
	}

	public function view() {
		extract( $this->_content,EXTR_PREFIX_ALL,'_' );
		//ob_start();
		$output = require $this->_template;
		//ob_end_clean();
		return $output;
	}


}