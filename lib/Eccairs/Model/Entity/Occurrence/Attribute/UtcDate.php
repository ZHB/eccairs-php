<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Occurrence\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class UtcDate implements AttributeInterface
{
    private $name = 'UTC_Date';

    private $attributes = [
        'attributeId' => '477',
    ];

    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
