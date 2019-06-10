<?php
declare(strict_types=1);

namespace Ueef\Packer\Exceptions;

use Exception;
use Throwable;

class AbstractException extends Exception
{
    public function __construct($message = "", Throwable $previous = null)
    {
        if (is_array($message)) {
            foreach ($message as &$value) {
                if (is_array($value) || is_object($value)) {
                    $value = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                }
            }

            $message = sprintf(...$message);
        }

        parent::__construct($message, 0, $previous);
    }
}