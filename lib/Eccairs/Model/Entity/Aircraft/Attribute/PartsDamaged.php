<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class PartsDamaged implements AttributeInterface
{
    private $name = 'Parts_Damaged';

    private $attributes = [
        'attributeId' => '643',
    ];

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
