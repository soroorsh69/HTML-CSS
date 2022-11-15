<?php

namespace Php\Project\Exception;

use Exception;

class ServiceNotFound extends Exception
{
    protected $message = 'Service is not found it';
}
