<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class FlightPhase implements AttributeInterface
{
    private $name = 'Flight_Phase';

    private $attributes = [
        'attributeId' => '121',
    ];

    private $value;

    public function __construct(int $value = null)
    {
        $this->value = $value;
    }
}
