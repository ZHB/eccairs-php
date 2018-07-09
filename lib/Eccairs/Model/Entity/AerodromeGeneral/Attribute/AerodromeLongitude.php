<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class AerodromeLongitude implements AttributeInterface
{
    private $name = 'Aerodrome_Longitude';

    private $attributes = [
        'attributeId' => '2',
    ];

    private $value;

    public function __construct(float $value = null)
    {
        $this->value = round($value, 7);
    }
}
