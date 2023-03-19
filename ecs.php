<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->import(__DIR__ . '/vendor/ghostwriter/coding-standard/ecs.php');
    $ecsConfig->paths([
        __DIR__ . '/bin',
        __DIR__ . '/ecs.php',
        __DIR__ . '/README.md',
        __DIR__ . '/rector.php',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);
};
