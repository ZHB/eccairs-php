<?php

namespace Zhb\Eccairs\Model\Entity\Aircraft;


use JMS\Serializer\Annotation as Serializer;
use Zhb\Eccairs\Model\AbstractEntity;

class Aircraft extends AbstractEntity
{
    private $name = 'Aircraft';

    private $attributes = [
        'ID' => 'ID64ff25bf5de74af9b5385f44c0721b0a',
        'entityId' => '4',
    ];

    private $value;

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
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
