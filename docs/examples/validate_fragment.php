<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
require_once 'Services/W3C/HTMLValidator.php';

$v = new Services_W3C_HTMLValidator();

echo '<pre>';
var_dump($v->validateFragment('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head><title>HTML Fragment</title></head>
    <body><p>TEST!</p></body>
</html>'));
?>