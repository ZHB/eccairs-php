<?php

/*
 * (c) ZHB <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\Eccairs\Exception;

class NotAllowedAttributeException extends \LogicException
{
    protected $message = 'The given attribute is not allowed in this context';
}
