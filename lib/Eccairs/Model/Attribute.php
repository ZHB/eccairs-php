<?php

namespace Zhb\Eccairs\Model;

use JMS\Serializer\Annotation as Serializer;

class Attribute
{
    const TEXT_ENCODING_STRING = 'xs:string';

    /**
     * @var int
     *
     * @Serializer\XmlAttribute()
     */
    private $attributeId;

    /**
     * @var null
     *
     * @Serializer\XmlAttribute()
     * @Serializer\SerializedName("AdditionalTextEncoding")
     */
    private $additionalTextEncoding;

    /**
     * @var
     *
     * @Serializer\XmlValue()
     */
    private $value;

    /**
     * Attribute constructor.
     *
     * @param      $attributeId
     * @param      $value
     * @param null $additionalTextEncoding
     */
    public function __construct($attributeId, $value, $additionalTextEncoding = null)
    {
        $this->attributeId = $attributeId;
        $this->value = $value;
        $this->additionalTextEncoding = $additionalTextEncoding;
    }

    /**
     * @return int
     */
    public function getAttributeId(): int
    {
        return $this->attributeId;
    }

    /**
     * @param int $attributeId
     */
    public function setAttributeId(int $attributeId)
    {
        $this->attributeId = $attributeId;
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

    /**
     * @return mixed
     */
    public function getAdditionalTextEncoding()
    {
        return $this->additionalTextEncoding;
    }

    /**
     * @param mixed $additionalTextEncoding
     */
    public function setAdditionalTextEncoding($additionalTextEncoding)
    {
        $this->additionalTextEncoding = $additionalTextEncoding;
    }
}
