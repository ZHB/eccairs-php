<?php

namespace Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena;


use JMS\Serializer\Annotation as Serializer;
use Zhb\Eccairs\Model\AbstractEntity;

class PrecipitationAndOtherWeatherPhenomena extends AbstractEntity
{
    private $name = 'Precipitation_And_Other_Weather_Phenomena';

    private $attributes = [
        //'ID' => 'ID64ff25bf5de74af9b5385f44c0721b0a',
        'entityId' => '28',
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
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
