<?php

namespace Zhb\Eccairs\Model\Entity;


use JMS\Serializer\Annotation as Serializer;
use Zhb\Eccairs\Model\AbstractEntity;

class PrecipitationAndOtherWeatherPhenomena extends AbstractEntity
{
    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    protected $entityId = '28';

    protected $entities;
}
