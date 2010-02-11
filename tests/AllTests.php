<?php
/**
 * Test suite for Services_W3C_HTMLValidator
 *
 * PHP versions 5
 *
 * @category Services
 * @package  Services_W3C_HTMLValidator
 * @author   Brett Bieber <brett.bieber@gmail.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php BSD
 * @version  CVS: $id$
 * @link     http://pear.php.net/package/Services_W3C_HTMLValidator
 * @since    File available since Release 0.2.0
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Services_W3C_HTMLValidator_AllTests::main');
}

require_once 'PHPUnit/TextUI/TestRunner.php';


require_once 'Services/W3C/HTMLValidatorTest.php';

/**
 * Class for running all test suites for Services_W3C_HTMLvalidator.
 *
 * @category Services
 * @package  Services_W3C_HTMLValidator
 * @author   Brett Bieber <brett.bieber@gmail.com>
 * @license  http://www.opensource.org/licenses/bsd-license.php BSD
 * @link     http://pear.php.net/package/Services_W3C_HTMLValidator
 * @since    File available since Release 0.2.0
 */

class Services_W3C_HTMLValidator_AllTests
{
    /**
     * Runs the test suite.
     *
     * @return unknown
     */
    public static function main()
    {

        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * Adds the Services_W3C_HTMLValidatorTest suite.
     *
     * @return $suite
     */
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Services_W3C_HTMLValidator tests');
        /** Add testsuites, if there is. */
        $suite->addTestSuite('Services_W3C_HTMLValidatorTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Services_W3C_HTMLValidator_AllTests::main') {
    Services_W3C_HTMLValidator_AllTests::main();
}
?>