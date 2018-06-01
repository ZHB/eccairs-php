<?php

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class FlightNumber implements AttributeInterface
{
    private $name = 'Flight_Number';

    private $attributes = [
        'attributeId' => '120'
    ];

    private $value;

    /**
     * AerodromeLatitude constructor.
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}
