<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\AerodromeGeneral;

use Zhb\Eccairs\Model\AbstractEntity;

class AerodromeGeneral extends AbstractEntity
{
    private $name = 'Aerodrome_General';

    private $attributes = [
        'entityId' => '1',
    ];

    protected $value;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return AerodromeGeneral
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
