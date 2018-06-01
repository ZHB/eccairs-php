<?php

namespace Zhb\Eccairs\Model\Entity\ReportingHistory\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class ReportIdentification implements AttributeInterface
{
    private $name = 'Report_Identification';

    private $attributes = [
        'attributeId' => '438'
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
