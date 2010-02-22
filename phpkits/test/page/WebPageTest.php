<?php
require_once('library/simpletest/autorun.php');
require_once('src/config/Config.php'); 

/**
 * 
 * @author Rey Bumalay
 *
 */
class WebPageTest extends UnitTestCase {
		
	function testFindPage() {
		$page = WebPage::findPage('DummyHomePage');
		$this->assertTrue($page != null, "DummyHomePage should have existed.");
	}
	
	function testFindNestedPage() {
		$page = WebPage::findPage('DummyNestedPage');
		$this->assertTrue($page != null, "DummyNestedPage should have existed.");
	}
}