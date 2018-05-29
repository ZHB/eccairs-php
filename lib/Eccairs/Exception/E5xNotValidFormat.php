<?php

namespace Zhb\Eccairs\Exception;

class E5xNotValidFormat extends \LogicException
{
    protected $message = 'Generated XML is not a valid E5X format';
}
