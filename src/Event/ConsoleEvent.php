<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Event;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ConsoleEvent
{
    public function __construct(
        private readonly InputInterface $input,
        private readonly OutputInterface $output
    ) {
    }

    public function getInput(): InputInterface
    {
        return $this->input;
    }

    public function getOutput(): OutputInterface
    {
        return $this->output;
    }
}
