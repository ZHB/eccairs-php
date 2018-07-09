<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model;

class Occurrence
{
    private $name = 'Occurrence';

    private $attributes = ['entityId' => '24'];

    private $value;

    private $attr;

    private $entities;

    public function __construct(Entities $entities)
    {
        $this->entities = $entities;
        $this->attr = new Attributes();
    }

    public function addAttribute(AttributeInterface $attr): self
    {
        $this->attr->addAttribute($attr);

        $this->value = [$this->attr, $this->entities];

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
     * @return Occurrence
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
