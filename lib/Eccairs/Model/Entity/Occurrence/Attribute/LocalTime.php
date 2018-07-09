<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class LocalTime implements AttributeInterface
{
    private $name = 'Local_Time';

    private $attributes = [
        'attributeId' => '457',
    ];

    private $value;

    public function __construct(string $value = null)
    {
        $this->value = $value;
    }
}
