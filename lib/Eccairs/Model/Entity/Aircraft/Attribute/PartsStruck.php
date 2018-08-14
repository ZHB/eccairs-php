<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class PartsStruck implements AttributeInterface
{
    private $name = 'Parts_Struck';

    private $attributes = [
        'attributeId' => '644',
    ];

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
