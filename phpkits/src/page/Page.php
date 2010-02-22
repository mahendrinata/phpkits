<?php

/**
 * interface of all pages
 * @author Rey Bumalay <reyjexter@gmail.com>
 *
 */
interface Page {

	/**
	 * add component to page
	 * @param $component - Component object
	 * @return Page instance
	 */
	function addComponent($component);
	
	/**
	 * forward to a certain page
	 * @param $page - Page object
	 * @return void
	 */
	function forward($page);
	
	/**
	 * redirect to a certain page
	 * @param $page - Page object
	 * @return void
	 */
	function redirect($page);
}