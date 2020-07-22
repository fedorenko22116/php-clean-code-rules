<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Repository;

/** @implements RepositoryInterface<string> */
class CharRepository implements RepositoryInterface
{
    use StringTrait;

    private const STORE = [
        'H' => 'H',
        'e' => 'e',
        'l' => 'l',
        'o' => 'o',
        'w' => 'w',
        'r' => 'r',
        'd' => 'd',
        ' ' => ' ',
        '!' => '!',
    ];

    /**
     * {@inheritDoc}
     */
    public function find($data): string
    {
        $result = '';

        foreach ($this->processString($data) as $datum) {
            $result .= self::STORE[$datum];
        }

        return $result;
    }
}
