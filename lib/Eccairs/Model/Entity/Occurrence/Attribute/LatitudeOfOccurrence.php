<?php

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class LatitudeOfOccurrence implements AttributeInterface
{
    private $name = 'Latitude_Of_Occ';

    private $attributes = [
        'attributeId' => '439'
    ];

    private $value;

    /**
     * LatitudeOfOccurrence constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
