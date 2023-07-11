<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([
        __DIR__ . '/vendor/ghostwriter/coding-standard/ecs.php',
    ]);

    $ecsConfig->paths([
        __DIR__ . '/ecs.php',
        __DIR__ . '/rector.php',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $ecsConfig->skip([
        __DIR__ . '/tests/Fixture/*', __DIR__ . '/vendor/*',
    ]);
};
