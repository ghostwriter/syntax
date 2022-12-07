<?php

declare(strict_types=1);

namespace Ghostwriter\Plex\Parser;

interface DocumentUri
{
    /**
     * "file:///path/to/file.php" -> "/path/to/file.php".
     */
    public function path(): string;

    /**
     * "file:///path/to/file.php" -> "file".
     */
    public function scheme(): string;
}
