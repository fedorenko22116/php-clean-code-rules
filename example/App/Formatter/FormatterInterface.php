<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Formatter;

interface FormatterInterface
{
    public function format(FormatterContextInterface $data): mixed;
}
