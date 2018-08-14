<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class BirdsWildlifeSeen implements AttributeInterface
{
    private $name = 'Birds_Wildlife_Seen';

    private $attributes = [
        'attributeId' => '646',
    ];

    private $value;

    public function __construct(int $value = null)
    {
        $this->value = $this->toEccairsValue($value);
    }

    private function toEccairsValue(int $value = null)
    {
        if (null === $value) {
            return 5;
        }

        switch ($value) {
            case 1 === $value:
                return 1;
            case $value >= 2 && $value <= 10:
                return 2;
            case $value >= 11 && $value <= 100:
                return 3;
            default:
                return 4;
        }
    }
}
