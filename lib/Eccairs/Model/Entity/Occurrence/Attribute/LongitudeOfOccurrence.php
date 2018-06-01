<?php

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class LongitudeOfOccurrence implements AttributeInterface
{
    private $name = 'Longitude_Of_Occ';

    private $attributes = [
        'attributeId' => '444'
    ];

    private $value;

    /**
     * LongitudeOfOccurrence constructor.
     *
     * @param float $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
