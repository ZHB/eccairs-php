<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;


class Entities implements AttributeInterface
{
    /**
     * @var string
     */
    private $name = 'ENTITIES';

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
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @param array $value
     */
    public function setValue(array $value)
    {
        $this->value = $value;
    }
}
