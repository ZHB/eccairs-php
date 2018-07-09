<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class SpeciesDescription implements AttributeInterface
{
    private $name = 'Species_Description';

    private $attributes = [
        'attributeId' => '645',
    ];

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
