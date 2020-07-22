<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Formatter;

interface FormatterInterface
{
    /**
     * @return mixed
     */
    public function format(FormatterContextInterface $data);
}
