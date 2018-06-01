<?php

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class PartsDamaged implements AttributeInterface
{
    private $name = 'Parts_Damaged';

    private $attributes = [
        'attributeId' => '643'
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
