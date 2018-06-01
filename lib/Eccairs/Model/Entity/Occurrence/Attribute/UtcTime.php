<?php

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class UtcTime implements AttributeInterface
{
    private $name = 'UTC_Time';

    private $attributes = [
        'attributeId' => '478'
    ];

    private $value;

    /**
     * UtcTime constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
