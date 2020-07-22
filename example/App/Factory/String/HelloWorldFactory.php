<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Factory\String;

use LSBProject\PhpCleanCodeRules\Example\App\{
    Formatter\Context,
    Formatter\StringFormatterInterface
};
use LSBProject\PhpCleanCodeRules\Example\App\Repository\RepositoryInterface;

class HelloWorldFactory implements StringFactoryInterface
{
    /**
     * @var RepositoryInterface<string>
     */
    private RepositoryInterface $repository;
    private StringFormatterInterface $formatter;

    /**
     * @param RepositoryInterface<string> $repository
     */
    public function __construct(RepositoryInterface $repository, StringFormatterInterface $formatter)
    {
        $this->repository = $repository;
        $this->formatter = $formatter;
    }

    public function create(): string
    {
        return $this->formatter->format(new Context($this->repository->find('Hello world!')));
    }
}
