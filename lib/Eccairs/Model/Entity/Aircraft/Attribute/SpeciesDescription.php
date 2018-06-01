<?php

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class SpeciesDescription implements AttributeInterface
{
    private $name = 'Species_Description';

    private $attributes = [
        'attributeId' => '645'
    ];

    private $value;

    /**
     * SpeciesDescription constructor.
     *
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
