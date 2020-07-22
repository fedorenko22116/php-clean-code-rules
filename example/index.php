<?php

declare(strict_types=1);

namespace LSBProject\PhpCleanCodeRules\Example;

use LSBProject\PhpCleanCodeRules\Example\App\Factory\String\HelloWorldFactory;
use LSBProject\PhpCleanCodeRules\Example\App\Formatter\CliFormatter;
use LSBProject\PhpCleanCodeRules\Example\App\Repository\CharRepository;

require_once __DIR__ . '/../vendor/autoload.php';

$formatter = new CliFormatter();
$repository = new CharRepository();
$factory = new HelloWorldFactory($repository, $formatter);

echo $factory->create();
