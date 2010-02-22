<?php

/**
 * 
 * @author Rey Bumalay <reyjexter@gmail.com>
 *
 */
interface Component {
	
	/**
	 * component id. Id is unique within the application
	 * @return string
	 */
	function getId();
	
	/**
	 * get list of components.
	 * @return Array of components
	 */
	function getComponents();

	/**
	 * add component
	 * @param $compnent - Component type object
	 * @return Component object to allow chaining
	 */
	function addComponent($compnent);
	
	/**
	 * get behaviours
	 * @return Array of behaviours
	 */
	function getBehaviors();
	
	
	/**
	 * add a behaviour
	 * @param $behaviour - Behaviour type object
	 * @return Component object to allow chaining
	 */
	function addBehaviour($behaviour);
	
	/**
	 * get validators
	 * @return Array of validators
	 */
	function getValidators();
	
	/**
	 * add a validator
	 * @param $validator - Validator type object
	 * @return Component object to allow chaining
	 */
	function addValidator($validator);
	
}