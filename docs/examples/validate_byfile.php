<?php
/**
 * Example usage of Services_W3C_HTMLValidator of validating a local file.
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

error_reporting(E_ALL);
ini_set('display_errors', true);
require_once 'Services/W3C/HTMLValidator.php';

$v = new Services_W3C_HTMLValidator();

echo '<pre>';
var_dump($v->validateFile('example.html'));


?>