<?php
/**
 * This file tests the validation of the web accessible URIs.
 */

require_once 'Services/W3C/HTMLValidator.php';
require_once 'PHPUnit/Framework.php';
 
// Call Services_W3C_HTMLValidatorTest::main() if executed directly.
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "URIValidationTest::main");
}

class URIValidationTest extends PHPUnit_Framework_TestCase
{
    public $uri = 'http://www.unl.edu/';
    
    protected $validator;
    
	/**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     * @return void
     */
    public static function main()
    {
        include_once "PHPUnit/TextUI/TestRunner.php";

        $suite  = new PHPUnit_Framework_TestSuite("URIValidationTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }
    
    
    public function setUp()
    {
        $this->validator = new Services_W3C_HTMLValidator();
    }
    
    public function testURI()
    {
        $r = $this->validator->validate($this->uri);
        $this->assertEquals(get_class($r), 'Services_W3C_HTMLValidator_Response');
        if (!$r->isValid()) {
            $message = $this->constructErrorMessage($r);
        } else {
            $message = $r->uri.' is Valid';
        }
        $this->assertTrue($r->isValid(), $message);
    }
    
    public function testFile()
    {
        $r = $this->validator->validate($this->uri);
        $this->assertEquals(get_class($r), 'Services_W3C_HTMLValidator_Response');
        if (!$r->isValid()) {
            $message = $this->constructErrorMessage($r);
        } else {
            $message = $r->uri.' is Valid';
        }
        $this->assertTrue($r->isValid(), $message);
    }
    
    protected function constructErrorMessage(&$r)
    {
        $message = $r->uri.' is NOT VALID: '.count($r->errors).' Errors -'.PHP_EOL;
        foreach ($r->errors as $error) {
            $message .= ' - '.$error->message.PHP_EOL;
        }
        return $message;
    }
}

// Call Services_W3C_HTMLValidatorTest::main() if file is executed directly.
if (PHPUnit_MAIN_METHOD == "URIValidationTest::main") {
    URIValidationTest::main();
}
?>