<?php
/**
 * Example file which shows how to validate a raw SOAP12 response.
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
var_dump($v->parseSOAP12Response('<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope">
<env:Body>
<m:markupvalidationresponse
env:encodingStyle="http://www.w3.org/2003/05/soap-encoding" 
xmlns:m="http://www.w3.org/2005/10/markup-validator">
    <m:uri>http://qa-dev.w3.org/wmvs/HEAD/dev/tests/xhtml1-bogus-element.html</m:uri>
    <m:checkedby>http://validator.w3.org/</m:checkedby>
    <m:doctype>-//W3C//DTD XHTML 1.0 Transitional//EN</m:doctype>
    <m:charset>utf-8</m:charset>
    <m:validity>false</m:validity>
    <m:errors>
        <m:errorcount>1</m:errorcount>
        <m:errorlist>
          
            <m:error>
                <m:line>13</m:line>
                <m:col>6</m:col>                                           
                <m:message>element "foo" undefined</m:message>
            </m:error>
           
        </m:errorlist>
    </m:errors>
    <m:warnings>
        <m:warningcount>0</m:warningcount>
        <m:warninglist>
        
        
        </m:warninglist>
    </m:warnings>
</m:markupvalidationresponse>
</env:Body>
</env:Envelope>
'));
?>