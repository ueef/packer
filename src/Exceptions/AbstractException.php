<?php
declare(strict_types=1);

namespace Ueef\Packer\Exceptions;

use Exception;
use Throwable;

class AbstractException extends Exception
{
    public function __construct($message = "", Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}