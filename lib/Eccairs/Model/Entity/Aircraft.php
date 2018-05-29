<?php

namespace Zhb\Eccairs\Model\Entity;


use JMS\Serializer\Annotation as Serializer;
use Zhb\Eccairs\Model\AbstractEntity;

class Aircraft extends AbstractEntity
{
    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    protected $ID = 'ID64ff25bf5de74af9b5385f44c0721b0a';

    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    protected $entityId = '4';
}
