<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class AerodromeLatitude implements AttributeInterface
{
    private $name = 'Aerodrome_Latitude';

    private $attributes = [
        'attributeId' => '1',
    ];

    private $value;

    public function __construct(float $value = null)
    {
        $this->value = round($value, 7);
    }
}
