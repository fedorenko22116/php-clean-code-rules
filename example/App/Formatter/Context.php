<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Formatter;

class Context implements FormatterContextInterface
{
    private string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
