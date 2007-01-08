<?php
/**
 * This file contains a simple class for error messages returned from the validator.
 * 
 * @package Services_W3C_HTMLValidator
 * @author Brett Bieber
 */

/**
 * Extends from the Message class
 */
require_once 'Services/W3C/HTMLValidator/Message.php';

/**
 * The message class holds an error response from the W3 validator.
 *
 */
class Services_W3C_HTMLValidator_Error extends Services_W3C_HTMLValidator_Message
{
    
}

?>