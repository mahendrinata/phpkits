<?php

/**
 * Creates the application
 * @author Rey Bumalay <reyjexter@gmail.com>
 *
 */
class ApplicationFactory {
	
	const MAIN_APPLICATION_KEY = 'PHPKits.mainApplication';
	
	const WEB_FOLDER_KEY = 'PHPKits.webFolder';
	
	const BASE_URL_KEY = 'PHPKits.baseUrl';
	
	const BASE_DIR_KEY = 'PHPKits.baseDir';

	var $_mainApplication;
	
	var $_config;
	
	var $_webFolder;
	
	var $_moduleNames;
	
	function startWebApplication($config) {
		$this->_mainApplication = $config->getValue(ApplicationFactory::MAIN_APPLICATION_KEY);
		$this->_webFolder = $config->getValue(ApplicationFactory::WEB_FOLDER_KEY);
		$this->_config = $config;
		
		$mainApplication = $this->_mainApplication;
		require_once($mainApplication . '.php');
		$applicationClass = explode("/", $mainApplication);
		$applicationClass = $applicationClass[sizeof($applicationClass)-1];
		
		$application = new $applicationClass();
		
		// load modules
		$this->loadModuleNames();
		exit;
		
		return $application;
	}
	
	function getMainApplication() {
		return $this->_mainApplication;
	}
	
	function getWebFolder() {
		return $this->_webFolder;
	}
	
	function getBaseDir() {
		return $this->_config->getValue(ApplicationFactory::BASE_DIR_KEY);
	}
	
	function getBaseUrl() {
		return $this->_config->getValue(ApplicationFactory::BASE_URL_KEY);
	}
	
	private function loadModuleNames() {
		$handle = opendir($this->getBaseDir() . "/" . $this->getWebFolder());
		while (false !== ($file = readdir($handle))) {
	        if(!is_dir($file)) {
	        	echo $file . "<br />";
	        }
	    }
	    closedir($handle);
	}
} 