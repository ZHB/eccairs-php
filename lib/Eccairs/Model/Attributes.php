<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model;

class Attributes implements AttributeInterface
{
    private $name = 'ATTRIBUTES';

    private $value = [];

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
     * @return Attributes
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->value;
    }

    /**
     * @param AttributeInterface $attribute
     *
     * @return Attributes
     */
    public function addAttribute(AttributeInterface $attribute): self
    {
        $this->value[] = $attribute;

        return $this;
    }
}
