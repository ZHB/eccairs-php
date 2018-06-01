<?php

namespace Zhb\Eccairs\Model\Entity\ReportingHistory\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class Report implements AttributeInterface
{
    const DATA_TYPE = 'http://eccairsportal.jrc.ec.europa.eu/ECCAIRS5_dataTypes.xsd';

    private $name = 'Report';

    private $value = [
        'FileName' => '',
        'Description' => '',
    ];

    /**
     * Report constructor.
     *
     * @param string $fileName
     * @param string $description
     */
    public function __construct(string $fileName, string $description)
    {
        $this->value = [
            [
                'name' => 'FileName',
                'value' => $fileName,
                'attributes' => [
                    'xmlns' => self::DATA_TYPE,
                ]
            ],
            [
                'name' => 'Description',
                'value' => $description,
                'attributes' => [
                    'xmlns' => self::DATA_TYPE,
                ]
            ],
        ];
    }
}
