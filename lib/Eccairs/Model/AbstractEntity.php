<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;
use Zhb\Eccairs\Exception\NotAllowedAttributeException;

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
     * @Serializer\XmlKeyValuePairs()
     */
    protected $ATTRIBUTES = [];

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
        return $this->ATTRIBUTES;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes)
    {
        /*
        foreach ($attributes as $key => $attribute) {
            if (!in_array($key, $this->attributesKeys)) {
                throw new NotAllowedAttributeException('The given attribute '.$key.' is not allowed in this context');
            }
        }
        */

        $this->ATTRIBUTES = $attributes;
    }
}