<?php

namespace Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class PhenomenonType implements AttributeInterface
{
    private $name = 'Phenomenon_Type';

    private $attributes = [
        'attributeId' => '299'
    ];

    private $value;

    /**
     * UtcDate constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
