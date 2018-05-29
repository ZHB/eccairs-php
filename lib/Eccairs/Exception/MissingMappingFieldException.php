<?php

namespace Zhb\Eccairs\Exception;

class MissingMappingFieldException extends \LogicException
{
    protected $message = 'The field doen\'t exists';
}
