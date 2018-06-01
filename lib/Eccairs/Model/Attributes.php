<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;


class Attributes implements AttributeInterface
{
    private $name = "ATTRIBUTES";

    private $value = [];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->value;
    }

    /**
     * @param AttributeInterface $attribute
     */
    public function addAttribute(AttributeInterface $attribute)
    {
        $this->value[] = $attribute;
    }
}
