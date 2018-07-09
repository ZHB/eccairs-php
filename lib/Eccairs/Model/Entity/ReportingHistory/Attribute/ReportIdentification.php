<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\ReportingHistory\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class ReportIdentification implements AttributeInterface
{
    private $name = 'Report_Identification';

    private $attributes = [
        'attributeId' => '438',
    ];

    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
