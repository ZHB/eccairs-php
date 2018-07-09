<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model\Entity\Aircraft;

use Zhb\Eccairs\Model\AbstractEntity;

class Aircraft extends AbstractEntity
{
    private $name = 'Aircraft';

    private $attributes = [
        'ID' => 'ID64ff25bf5de74af9b5385f44c0721b0a',
        'entityId' => '4',
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
     * @return Aircraft
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
