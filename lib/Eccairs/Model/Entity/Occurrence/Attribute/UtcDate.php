<?php

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class UtcDate implements AttributeInterface
{
    private $name = 'UTC_Date';

    private $attributes = [
        'attributeId' => '477'
    ];

    private $value;

    /**
     * UtcDate constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
