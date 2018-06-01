<?php

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class BirdsWildlifeStruck implements AttributeInterface
{
    private $name = 'Birds_Wildlife_Struck';

    private $attributes = [
        'attributeId' => '647'
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
