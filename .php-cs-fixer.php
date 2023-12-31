<?php

declare(strict_types=1);

return
    (new PhpCsFixer\Config())
        ->setCacheFile(__DIR__ . '/var/php_cs.cache')
        ->setFinder(
            PhpCsFixer\Finder::create()
                ->in([
                    __DIR__ . '/public',
                    __DIR__ . '/src',
                    __DIR__ . '/tests',
                ])
                ->append([
                    __FILE__,
                ])
        )
        ->setRules([
            '@PER' => true,
            '@PER:risky' => true,
            '@PHP81Migration' => true,
            '@PHP80Migration:risky' => true,
            '@PHPUnit84Migration:risky' => true,
        ]);
