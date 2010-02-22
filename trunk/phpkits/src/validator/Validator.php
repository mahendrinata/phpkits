<?php

/**
 * 
 * @author Rey Bumalay <reyjexter@gmail.com>
 *
 */
interface Validator {
	
	/**
	 * execute validator
	 * @return boolean - true if successful false if not
	 */
	function validate();

	/**
	 * get component to where validator is attached
	 * @return Component object
	 */
	function getComponent();
}
