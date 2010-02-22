<?php

require_once("Page.php");

/**
 * Base class of all webpage
 * @author Rey Bumalay <reyjexter@gmail.com>
 *
 */
abstract class WebPage implements Page {
	
	function addComponent($component) {
		return $this;
	}
	
	function forward($page) {
		
	}
	
	function redirect($page) {
		
	}
	
	/**
	 * find web page just by giving the name. search through the include paths
	 * @param string $className - class to be searched
	 * @return Page object
	 */
	static function findPage($className) {
		global $applicationFactory;
		
		$searchPaths = array();
		
		$webFolder = $applicationFactory->getWebFolder();
		
		$path = $applicationFactory->getBaseDir() . "/" . $webFolder . "/" . $className . ".php";
		$searchPaths[] = $path;
		if(file_exists($path)) {
			require_once($applicationFactory->getBaseDir() . "/" . $webFolder . "/" . $className . ".php");
			return new $className();
		}
		else {
			$message = "Could not found page '". $className ."' while searching the following paths: ";
			foreach($searchPaths as $value) {
				$message .= implode(", ", $searchPaths);
			}
			throw new Exception($message);
		}
	}
}