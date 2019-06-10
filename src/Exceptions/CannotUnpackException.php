<?php
declare(strict_types=1);

namespace Ueef\Packer\Exceptions;

use Ueef\Packer\Interfaces\PackerExceptionInterface;

class CannotUnpackException extends AbstractException implements PackerExceptionInterface {}