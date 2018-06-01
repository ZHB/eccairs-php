<?php

namespace Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class AerodromeLongitude implements AttributeInterface
{
    private $name = 'Aerodrome_Longitude';

    private $attributes = [
        'attributeId' => '2'
    ];

    private $value;

    /**
     * AerodromeLongitude constructor.
     *
     * @param float $value
     */
    public function __construct(float $value)
    {
        $this->value = $value;
    }
}
