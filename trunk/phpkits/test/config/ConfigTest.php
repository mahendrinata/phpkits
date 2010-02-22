<?php
require_once('library/simpletest/autorun.php');
require_once('src/config/Config.php'); 

/**
 * 
 * @author Rey Bumalay
 *
 */
class ConfigTest extends UnitTestCase {
	
	var $config;
	var $configCount = 5;
	
 	function setUp() {
    	$this->config = new Config("test/config-test.ini");
 	}
    
    function tearDown() {
    	unset($this->config);
    	unset($this->configCount);
    }
	
    function testConfigLoading() {
       	$this->assertTrue(sizeof($this->config->_config) == $this->configCount, "Configuration could should be equal to " . $this->configCount);
    }
    
    function testSuccessValueFetch() {
    	$this->assertTrue($this->config->getValue("PHPKits.forceUnitTest") == true, "PHPKits.forceUnitTest should be true");
    }
    
	function testNonExistentConfigKey() {
		try {
    		$this->config->getValue("PHPKits.forceUnitTest1");
		}
		catch(Exception $e) {
			$this->assertTrue(true);
			return;
		}
		$this->assertTrue(false, "Exception should be throw before reaching this assertion");
    }
    
    
}