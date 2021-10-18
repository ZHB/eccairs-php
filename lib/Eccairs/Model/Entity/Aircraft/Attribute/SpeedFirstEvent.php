<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class SpeedFirstEvent implements AttributeInterface
{
    private $name = 'Speed_First_Event';

    private $attributes = [
        'attributeId' => '273',
    ];

    private $value;

    public function __construct($value = null)
    {
        if (0 > $value || 1999 < $value) {
            throw new \LogicException('Aircraft speed at first event must be >= 0 and <= 1999');
        }

        $this->value = $value;
    }
}
