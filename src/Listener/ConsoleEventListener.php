<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Listener;

use Ghostwriter\Syntax\Event\ConsoleEvent;

final class ConsoleEventListener
{
    public function __invoke(ConsoleEvent $event): void
    {
        var_dump($event);
    }
}
