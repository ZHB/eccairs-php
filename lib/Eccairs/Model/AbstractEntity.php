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

    public function addAttribute(AttributeInterface $attribute)
    {
        $this->value->addAttribute($attribute);

        return $this;
    }
}
