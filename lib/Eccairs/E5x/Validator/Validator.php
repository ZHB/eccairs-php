<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\E5x\Validator;

use Zhb\Eccairs\Exception\E5xNotValidFormatException;

class Validator
{
    /**
     * Validate an xml string against ECCAIRS xsd schemas.
     *
     * @param $xml
     *
     * @return bool
     */
    public function isValid($xml)
    {
        set_error_handler(function ($code, $message, $file, $line, array $context) {
            if (0 === error_reporting()) {
                return false;
            }

            throw new E5xNotValidFormatException($message, $code);
        });

        $doc = new \DOMDocument();
        $doc->loadXML($xml);

        return $doc->schemaValidate(__DIR__.'/xsd/Schema.xsd');
    }
}
