<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Factory\String;

use LSBProject\PhpCleanCodeRules\Example\App\Factory\FactoryInterface;

interface StringFactoryInterface extends FactoryInterface
{
    public function create(): string;
}
