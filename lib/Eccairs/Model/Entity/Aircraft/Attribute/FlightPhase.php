<?php

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class FlightPhase implements AttributeInterface
{
    private $name = 'Flight_Phase';

    private $attributes = [
        'attributeId' => '121'
    ];

    private $value;

    /**
     * AerodromeLatitude constructor.
     *
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
