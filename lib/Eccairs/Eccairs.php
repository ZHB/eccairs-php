<?php

namespace Zhb\Eccairs;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use \Zhb\Eccairs\E5x\Validator\Validator;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use Zhb\Eccairs\E5x\Zipper;
use Zhb\Eccairs\Exception\E5xNotValidFormat;
use Zhb\Eccairs\Model\Set;

class Eccairs
{
    /**
     * @var Set
     */
    private $set;

    /**
     * Eccairs constructor.
     */
    public function __construct(Set $set)
    {
        $this->set = $set;
    }

    public function e5xAsAttachment()
    {
        $zipper = new Zipper($this->getXml());

        $zipper->compress();
    }

    /**
     * @return string
     */
    private function getXml(): string
    {
        $xml = $this->getSerializer()->serialize($this->set, 'xml');

        $validator = new Validator();
        if (!$validator->isValid($xml)) {
            throw new E5xNotValidFormat();
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
