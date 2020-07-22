<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Formatter;

class CliFormatter implements StringFormatterInterface
{
    public function format(FormatterContextInterface $context): string
    {
        return (string) $context->getData() . PHP_EOL;
    }
}
