<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\AerodromeGeneral\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class LocationIndicator implements AttributeInterface
{
    private $name = 'Location_Indicator';

    private $attributes = [
        'attributeId' => '5',
    ];

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
