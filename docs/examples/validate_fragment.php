<?php
/**
 * Example file demonstrating how to validate an HTML fragment.
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
$t = $v->validateFragment('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head><title>HTML Fragment</title></head>
    <body><p>TEST!</p></body>
</html>');
var_dump($r);
?>