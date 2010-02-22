<?php

$path = 'c:\\xampp\\htdocs\phpkits';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

require_once('library/simpletest/autorun.php');

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('All tests');
        $this->addFile('test/config/ConfigTest.php');
        
        $this->addFile('test/application/ApplicationFactoryTest.php');

        $this->addFile('test/page/WebPageTest.php');
    }
}
