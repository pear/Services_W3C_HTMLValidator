<?php

if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "ValidationTestSuite::main");
}


require_once 'PHPUnit/Framework.php';
require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'URIValidationTest.php';

class ValidationTestSuite extends PHPUnit_Framework_TestSuite
{
    function __construct($name)
    {
        
    }
    
    /**
     * Runs the test suite.
     *
     * @return unknown
     */
    public static function main()
    {
        include_once "PHPUnit/TextUI/TestRunner.php";
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * Adds the Services_W3C_HTMLValidatorTest suite.
     *
     * @return $suite
     */
    public static function suite()
    {
        $uris_to_check = array('http://www.unl.edu/',
                               'http://events.unl.edu/',
                               'http://www.google.com/');        
        $suite = new PHPUnit_Framework_TestSuite('ValidationTestSuite tests');
        /** Add tests, if there is. */
        foreach ($uris_to_check as $uri) {
            $test      = new URIValidationTest('testURI');
            $test->uri = $uri;
            $suite->addTest($test);
        }

        return $suite;
    }
}

// Call Services_W3C_HTMLValidatorTest::main() if file is executed directly.
if (PHPUnit_MAIN_METHOD == "ValidationTestSuite::main") {
    ValidationTestSuite::main();
}
?>