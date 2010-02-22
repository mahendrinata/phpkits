<?php

/**
 * Main application interface
 * @author Rey Bumalay <reyjexter@gmail.com>
 *
 */
interface Application {
	
	/**
	 * get the login page
	 * @return Page object
	 */
	function getLoginPage();
	
	/**
	 * get the home page
	 * @return Page object
	 */
	function getHomePage();
}