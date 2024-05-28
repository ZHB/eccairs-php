<?php 
namespace Zhb\Eccairs\E5x\Validator;

use DOMDocument;
use Throwable;
use LibXMLError;
use Zhb\Eccairs\Exception\E5xNotValidFormatException;

class Validator
{
    /**
     * Validate an XML string against ECCAIRS XSD schemas.
     *
     * @param string $xml XML content to validate.
     * @return bool True if the XML is valid, otherwise false.
     * @throws E5xNotValidFormatException if the XML is invalid.
     */
    public function isValid(string $xml): bool
    {
        $doc = new DOMDocument();
        libxml_use_internal_errors(true); // Enable user error handling

        if (!$doc->loadXML($xml)) {
            $this->handleXmlErrors();
            return false;
        }

        if (!$doc->schemaValidate(__DIR__ . '/xsd/Schema.xsd')) {
            $this->handleXmlErrors();
            return false;
        }

        return true;
    }

    /**
     * Handles XML errors collected by libxml.
     *
     * @throws E5xNotValidFormatException with the error messages from libxml.
     */
    private function handleXmlErrors(): void
    {
        $errors = libxml_get_errors();
        libxml_clear_errors();

        $errorMessage = array_reduce($errors, function ($carry, LibXMLError $error) {
            return $carry . $error->message . "\n";
        }, '');

        if (!empty($errorMessage)) {
            throw new E5xNotValidFormatException(trim($errorMessage));
        }
    }
}
