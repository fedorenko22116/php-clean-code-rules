<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Formatter;

class CliFormatter implements StringFormatterInterface
{
    public function format(FormatterContextInterface $context): string
    {
        $data = $context->getData();

        if (
            '12345671234567123456712345671234567123456712345671234567' === $data ||
            '1234567123456712345671234567' === $data
        ) {
            $data = 'qwe';
        }

        return $data . PHP_EOL;
    }
}
