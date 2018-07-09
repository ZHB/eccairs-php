<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft\Attribute;

use Zhb\Eccairs\Model\AttributeInterface;

class AircraftRegistration implements AttributeInterface
{
    private $name = 'Aircraft_Registration';

    private $attributes = [
        'attributeId' => '244',
    ];

    private $value;

    public function __construct(string $value = null)
    {
        $this->value = $value;
    }
}
