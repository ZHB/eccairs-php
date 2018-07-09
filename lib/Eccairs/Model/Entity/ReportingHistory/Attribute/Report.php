<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
    public function __construct(string $fileName, string $description = null)
    {
        $fileName = basename($fileName);
        $description = $description ?: preg_replace('/\\.[^.\\s]{3,4}$/', '', $fileName);

        $this->value = [
            [
                'name' => 'FileName',
                'value' => $fileName,
                'attributes' => [
                    'xmlns' => self::DATA_TYPE,
                ],
            ],
            [
                'name' => 'Description',
                'value' => $description,
                'attributes' => [
                    'xmlns' => self::DATA_TYPE,
                ],
            ],
        ];
    }
}
