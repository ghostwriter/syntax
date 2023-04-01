<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Parser;

/**
 * The location where an element occurs within a file.
 *
 * @psalm-immutable
 */
final class Location
{
    /**
     * Initializes the location for an element using its line number in the file and optionally the column number.
     */
    public function __construct(
        private int $line = 1,
        private int $column = 0
    ) {
    }

    /**
     * Returns the column number (character position on a line) for this location object.
     */
    public function getColumn(): int
    {
        return $this->column;
    }

    /**
     * Returns the line number that is covered by this location.
     */
    public function getLine(): int
    {
        return $this->line;
    }

    public function withColumn(int $column): self
    {
        if ($this->column === $column) {
            return $this;
        }

        $copy = clone $this;
        $copy->column = $column;
        return $copy;
    }

    public function withLine(int $line): self
    {
        if ($this->line === $line) {
            return $this;
        }

        $copy = clone $this;
        $copy->line = $line;
        return $copy;
    }

    public function withLineAndColumn(int $line = 1, int $column = 0): self
    {
        return $this->withLine($line)
            ->withColumn($column);
    }
}
