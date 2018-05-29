<?php

namespace Zhb\Eccairs\Exception;

class NotAllowedAttributeException extends \LogicException
{
    protected $message = 'The given attribute is not allowed in this context';
}
