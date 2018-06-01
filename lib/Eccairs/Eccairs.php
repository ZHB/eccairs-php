<?php

namespace Zhb\Eccairs;

use Sabre\Xml\Service;
use \Zhb\Eccairs\E5x\Validator\Validator;
use Zhb\Eccairs\E5x\Zipper;
use Zhb\Eccairs\Exception\E5xNotValidFormatException;
use Zhb\Eccairs\Model\Occurrence;

class Eccairs
{
    /**
     * @var Occurrence
     */
    private $occurrence;

    /**
     * @var bool
     */
    private $validateAgainstXsd;

    /**
     * @var Zipper
     */
    private $zipper;

    /**
     * Eccairs constructor.
     */
    public function __construct(Occurrence $occurrence, $validateAgainstXsd = true)
    {
        $this->occurrence = $occurrence;
        $this->validateAgainstXsd = $validateAgainstXsd;

        $this->zipper = new Zipper($this->getXml());
    }

    public function addFile($filePath)
    {
        $this->zipper->addFile($filePath);
    }

    public function e5xAsAttachment()
    {
        $this->zipper->compress();
    }

    /**
     * @return string
     */
    public function getXml(): string
    {
        $xmlService = new Service();
        $xmlService->namespaceMap = [
            'http://www.w3.org/2001/XMLSchema-instance' => 'xsi',
            'http://www.w3.org/2001/XMLSchema' => 'xsd',
            'http://eccairsportal.jrc.ec.europa.eu/ECCAIRS5_dataBridge.xsd' => '',
        ];

        $xml = $xmlService->write(
            'SET',
            function($writer) {
                $writer->writeAttribute('TaxonomyName','ECCAIRS Aviation');
                $writer->writeAttribute('TaxonomyVersion', '3.4.0.1');
                $writer->writeAttribute('Domain', 'RIT');
                $writer->writeAttribute('Version', '1.0.0.0');
                $writer->write($this->objectToArray($this->occurrence));
            }
        );

        if ($this->validateAgainstXsd) {
            $validator = new Validator();
            if (!$validator->isValid($xml)) {
                throw new E5xNotValidFormatException();
            }
        }

        return $xml;
    }

    private function objectToArray($obj) {
        if(is_object($obj)) $obj = (array) $this->dismount($obj);
        if(is_array($obj)) {
            $new = array();
            foreach($obj as $key => $val) {
                $new[$key] = $this->objectToArray($val);
            }
        }
        else $new = $obj;
        return $new;
    }

    private function dismount($object) {
        $reflectionClass = new \ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;
    }

}
