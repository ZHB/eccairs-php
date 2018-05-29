<?php

namespace Zhb\Eccairs\E5x\Validator;

use Zhb\Eccairs\Exception\E5xNotValidFormat;

class Validator
{
    /**
     * Validate an xml string against ECCAIRS xsd schemas
     *
     * @param $xml
     *
     * @return bool
     */
    public function isValid($xml)
    {
        set_error_handler(function($message, $code, $file, $line, array $context) {
            if (0 === error_reporting()) {
                return false;
            }

            throw new E5xNotValidFormat($message, $code);
        });

        $doc = new \DOMDocument();
        $doc->loadXML($xml);

        return $doc->schemaValidate(dirname(__FILE__).'/xsd/Schema.xsd');
    }
}
