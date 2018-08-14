<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class PilotAdvisedOfBirds implements AttributeInterface
{
    private $name = 'Pilot_Advised_Of_Birds';

    private $attributes = [
        'attributeId' => '649',
    ];

    private $value;

    public function __construct(int $value = null)
    {
        $this->value = $this->toEccairsValue($value);
    }

    private function toEccairsValue(int $value = null)
    {
        if (null === $value) {
            return 4;
        }

        return $value ? 1 : 2;
    }
}
