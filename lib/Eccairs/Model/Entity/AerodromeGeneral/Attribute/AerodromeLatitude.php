<?php

namespace Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class AerodromeLatitude implements AttributeInterface
{
    private $name = 'Aerodrome_Latitude';

    private $attributes = [
        "attributeId" => '1',
    ];

    private $value;

    /**
     * AerodromeLatitude constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
