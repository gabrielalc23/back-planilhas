<?php

namespace app\classes\exceptions;

use ErrorException;
use Exception;
use Throwable;

class ControllerNotExistException extends Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        throw new ErrorException("Esse controller não existe");
    }
}