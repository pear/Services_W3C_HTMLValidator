<?php
/**
 * Generates the package.xml file for the Services_W3C_HTMLValidator package.
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

ini_set('display_errors', true);
require_once 'PEAR/PackageFileManager2.php';
require_once 'PEAR/PackageFileManager/File.php';
require_once 'PEAR/Task/Postinstallscript/rw.php';
require_once 'PEAR/Config.php';
require_once 'PEAR/Frontend.php';

/**
 * @var PEAR_PackageFileManager
 */
PEAR::setErrorHandling(PEAR_ERROR_DIE);
chdir(dirname(__FILE__));
$pfm = PEAR_PackageFileManager2::importOptions('package.xml', array(
//$pfm = new PEAR_PackageFileManager2();
//$pfm->setOptions(array(
    'packagedirectory'  => dirname(__FILE__),
    'baseinstalldir'    => 'Services/W3C',
    'filelistgenerator' => 'cvs',
    'ignore' => array(  'package.xml',
                        '.project',
                        '*.tgz',
                        'makepackage.php',
                        '*CVS/*',
                        '*SVN/*',
                        '.cache'),
    'simpleoutput' => true,
    'roles'=>array('php'=>'php'),
    'exceptions'=>array()
));
$pfm->setPackage('Services_W3C_HTMLValidator');
$pfm->setPackageType('php'); // this is a PEAR-style php script package
$pfm->setSummary('An Object Oriented Interface to the W3C HTML Validator service.');
$pfm->setDescription('This package provides an object oriented interface to the API 
of the W3 HTML Validator application (http://validator.w3.org/).
With this package you can connect to a running instance of the validator and 
retrieve the validation results (true|false) as well as the errors and warnings 
for a web page.

By using the SOAP 1.2 output format from the validator, you are returned simple 
objects containing all the information from the validator. With this package it is 
trivial to build a validation system for web publishing.
');
$pfm->setChannel('pear.php.net');
$pfm->setAPIStability('beta');
$pfm->setReleaseStability('beta');
$pfm->setAPIVersion('1.0.0RC1');
$pfm->setReleaseVersion('1.0.0RC1');
$pfm->setNotes('New features - return error and warning source context, unique 
message id, and explanations for the error and warnings.
http://www.w3.org/Bugs/Public/show_bug.cgi?id=4489

These features are included in the latest version of the W3C Validator (version 
0.8.0).
Unit Tests now included, additional documentation and coding standards fixes.
');

//$pfm->addMaintainer('lead', 'saltybeagle', 'Brett', 'brett.bieber@gmail.com');
$pfm->setLicense('BSD', 'http://www.opensource.org/licenses/bsd-license.php');
$pfm->clearDeps();
$pfm->setPhpDep('5.0.0');
$pfm->setPearinstallerDep('1.4.3');
$pfm->addPackageDepWithChannel('required', 'HTTP_Request', 'pear.php.net', '1.3.0');

$pfm->generateContents();
if (isset($_SERVER['argv']) && $_SERVER['argv'][1] == 'make') {
    $pfm->writePackageFile();
} else {
    $pfm->debugPackageFile();
}
?>