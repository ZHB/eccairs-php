<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;

class Occurrence
{
    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\XmlAttribute()
     */
    private $entityId = 24;

    /**
     * @var array
     *
     * @Serializer\XmlKeyValuePairs()
     */
    private $ATTRIBUTES = [];

    /**
     * @var array
     *
     * @Serializer\XmlKeyValuePairs()
     * @Serializer\SerializedName("ENTITIES")
     */
    private $entities = [];

    /**
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->entityId;
    }

    /**
     * @param int $entityId
     */
    public function setEntityId(int $entityId)
    {
        $this->entityId = $entityId;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->ATTRIBUTES;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->ATTRIBUTES = $attributes;
    }

    /**
     * @return array
     */
    public function getEntities(): array
    {
        return $this->entities;
    }

    /**
     * @param array $entities
     */
    public function setEntities(array $entities)
    {
        $this->entities = $entities;
    }
}
