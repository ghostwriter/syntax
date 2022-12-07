<?php

declare(strict_types=1);

namespace Ghostwriter\Plex\Contract\Parser;

interface VisitorInterface
{
    public function visit(NodeInterface $visitor): void;
}
