<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example\App\Repository;

/** @template T */
interface RepositoryInterface
{
    /**
     * @param T|mixed $data
     *
     * @return T|mixed
     */
    public function find($data);
}
