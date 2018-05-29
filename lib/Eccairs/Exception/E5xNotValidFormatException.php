<?php

namespace Zhb\Eccairs\Exception;

class E5xNotValidFormatException extends \LogicException
{
    protected $message = 'Generated XML is not a valid E5X format';
}
