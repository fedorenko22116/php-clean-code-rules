<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Repository;

trait StringTrait
{
    /** @return array<string> */
    public function processString(string $str): array
    {
        return str_split($str);
    }
}
