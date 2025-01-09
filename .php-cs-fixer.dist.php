<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
putenv('PHP_CS_FIXER_IGNORE_ENV=1');

$finder = Finder::create()
    ->in(__DIR__)
    ->exclude('var')
    ->exclude('vendor');

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);