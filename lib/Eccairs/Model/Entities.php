<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model;

class Entities implements AttributeInterface
{
    /**
     * @var string
     */
    private $name = 'ENTITIES';

    private $value = [];

    public function addEntity(AbstractEntity $entity): self
    {
        $this->value[] = $entity;

        return $this;
    }

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
     * @return Entities
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
