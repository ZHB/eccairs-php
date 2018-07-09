<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Model;

abstract class AbstractEntity
{
    protected $value;

    public function __construct()
    {
        $this->value = new Attributes();
    }

    /**
     * @param AttributeInterface $attribute
     *
     * @return AbstractEntity
     */
    public function addAttribute(AttributeInterface $attribute): self
    {
        $this->value->addAttribute($attribute);

        return $this;
    }
}
