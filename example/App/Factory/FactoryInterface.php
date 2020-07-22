<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Factory;

interface FactoryInterface
{
    /**
     * @return mixed
     */
    public function create();
}
