<?php
if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Services_W3C_HTMLValidator_AllTests::main');
}

require_once 'PHPUnit/Framework/TestSuite.php';
require_once 'PHPUnit/TextUI/TestRunner.php';


require_once 'Services/W3C/HTMLValidatorTest.php';


class Services_W3C_HTMLValidator_AllTests
{
    public static function main()
    {

        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Services_W3C_HTMLValidatorTest');
        /** Add testsuites, if there is. */
        $suite->addTestSuite('Services_W3C_HTMLValidatorTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Services_W3C_HTMLValidator_AllTests::main') {
    Services_W3C_HTMLValidator_AllTests::main();
}
?>