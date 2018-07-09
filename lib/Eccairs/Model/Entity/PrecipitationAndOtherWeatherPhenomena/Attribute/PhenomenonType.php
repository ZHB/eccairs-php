<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\PrecipitationAndOtherWeatherPhenomena\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class PhenomenonType implements AttributeInterface
{
    private $name = 'Phenomenon_Type';

    private $attributes = [
        'attributeId' => '299',
    ];

    private $value;

    public function __construct(string $value = null)
    {
        $this->value = $value;
    }
}
