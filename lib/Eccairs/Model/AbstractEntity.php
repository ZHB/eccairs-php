<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\EventDispatcher\ObjectEvent;


abstract class AbstractEntity
{
    /**
     * @var array
     *
     * @Serializer\Exclude()
     */
    protected $attributesKeys = [];

    /**
     * @var array
     *
     * @Serializer\Type("array<Zhb\Eccairs\Model\AttributeInterface>")
     * @Serializer\XmlKeyValuePairs()
     * @Serializer\SerializedName("ATTRIBUTES")
     */
    protected $attributes = [];

    /**
     * @var array
     *
     * @Serializer\XmlKeyValuePairs()
     * @Serializer\SerializedName("ENTITIES")
     */
    protected $entities = [];

    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    protected $entityId;

    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    protected $ID;

    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }
}