<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class FlightNumber implements AttributeInterface
{
    private $name = 'Flight_Number';

    private $attributes = [
        'attributeId' => '120',
    ];

    private $value;

    public function __construct($value = null)
    {
        $this->value = mb_strtoupper($value);
    }
}
