<?php
/**
 * File contains a simple class structure for holding a response from the
 * W3C HTMLValidator software.
 * 
 * @package Services_W3C_HTMLValidator
 * @author Brett Bieber
 */

/**
 * Simple class for a W3C HTML Validator Response.
 */
class Services_W3C_HTMLValidator_Response
{
    /**
     * the address of the document validated
     * 
     * Will (likely?) be upload://Form Submission  
     * if an uploaded document or fragment was validated. In EARL terms, this is
     * the TestSubject.
     * @var string
     */
    public $uri;
    
    /**
     * Location of the service which provided the validation result. In EARL terms,
     * this is the Assertor.
     * @var string
     */
    public $checkedby;
    
    /**
     * Detected (or forced) Document Type for the validated document
     * @var string
     */
    public $doctype;
    
    /**
     * Detected (or forced) Character Encoding for the validated document
     * @var string
     */
    public $charset;
    
    /**
     * Whether or not the document validated passed or not formal validation 
     * (true|false boolean)
     * @var bool
     */
    public $validity;
    
    /**
     * Array of HTMLValidator_Error objects (if applicable)
     * @var array
     */
    public $errors = array();
    
    /**
     * Array of HTMLValidator_Warning objects (if applicable)
     * @var array
     */
    public $warnings = array();
    
    /**
     * Returns the validity of the checked document.
     * 
     * @return bool
     */
    function isValid()
    {
        if ($this->validity) {
            return true;
        } else {
            return false;
        }
    }
    
}

?>