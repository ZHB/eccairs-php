<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class UtcTime implements AttributeInterface
{
    private $name = 'UTC_Time';

    private $attributes = [
        'attributeId' => '478',
    ];

    private $value;

    public function __construct(string $value = null)
    {
        $this->value = $value;
    }
}
