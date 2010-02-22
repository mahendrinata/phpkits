<?php
require_once('library/simpletest/autorun.php');
require_once('src/application/ApplicationFactory.php');

$applicationFactory = null;

/**
 * 
 * @author Rey Bumalay
 *
 */
class ApplicationFactoryTest extends UnitTestCase {
	
	var $config;
	
	function setUp() {
		$this->config = new Config("test/config-test.ini");
    }
    
    function tearDown() {
    	unset($this->config);
    }

    function testStartApplication() {
    	global $applicationFactory;
    	$applicationFactory = new ApplicationFactory();
    	$application = $applicationFactory->startWebApplication($this->config);
    	$this->assertTrue($application != null, "Application cannot be null");
    }
}