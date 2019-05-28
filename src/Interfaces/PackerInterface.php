<?php
declare(strict_types=1);

namespace Ueef\Packer\Interfaces;

interface PackerInterface
{
    public function pack(object $entity): array;
    public function unpack(array $packed): object;
}
