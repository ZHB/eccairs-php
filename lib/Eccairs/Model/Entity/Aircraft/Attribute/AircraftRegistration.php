<?php

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class AircraftRegistration implements AttributeInterface
{
    private $name = 'Aircraft_Registration';

    private $attributes = [
        'attributeId' => '244'
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
