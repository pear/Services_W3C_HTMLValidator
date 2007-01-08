<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
require_once 'Services/W3C/HTMLValidator.php';

$v = new Services_W3C_HTMLValidator();

echo '<pre>';
var_dump($v->validateFile('example.html'));


?>