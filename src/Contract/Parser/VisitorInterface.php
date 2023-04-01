<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Contract\Parser;

interface VisitorInterface
{
    public function visit(NodeInterface $visitor): void;
}
