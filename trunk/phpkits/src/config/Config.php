<?php

/**
 * Basic configuration 
 * @author Rey Bumalay <reyjexter@gmail.com>
 *
 */
class Config {
	
	var $_config;
	
	public function __construct($iniFile) {
		$this->_config = parse_ini_file($iniFile);
	}
	
	public function getValue($name) {
		if(isset($this->_config[$name])) {
			return $this->_config[$name];
		}
		else {
			throw new Exception("No config key named '". $name ."' was found.");
		}
	}
}