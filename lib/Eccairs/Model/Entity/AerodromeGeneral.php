<?php

namespace Zhb\Eccairs\Model\Entity;


use JMS\Serializer\Annotation as Serializer;
use Zhb\Eccairs\Model\AbstractEntity;

class AerodromeGeneral extends AbstractEntity
{
    /**
     * @Serializer\XmlAttribute()
     */
    protected $entityId = '1';
}
