<?php

namespace Zhb\Eccairs;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use \Zhb\Eccairs\E5x\Validator\Validator;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use Zhb\Eccairs\E5x\Zipper;
use Zhb\Eccairs\Exception\E5xNotValidFormatException;
use Zhb\Eccairs\Model\Set;

class Eccairs
{
    /**
     * @var Set
     */
    private $set;

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
    public function __construct(Set $set, $validateAgainstXsd = true)
    {
        $this->set = $set;
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
        $xml = $this->getSerializer()->serialize($this->set, 'xml');

        if ($this->validateAgainstXsd) {
            $validator = new Validator();
            if (!$validator->isValid($xml)) {
                throw new E5xNotValidFormatException();
            }
        }

        return $xml;
    }

    private function getSerializer(): Serializer
    {
        AnnotationRegistry::registerLoader('class_exists');

        $serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new SerializedNameAnnotationStrategy(
                    new IdenticalPropertyNamingStrategy()
                )
            )
            ->build()
        ;

        return $serializer;
    }
}
