<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax;

use Generator;
use RuntimeException;

/** @see TokenizerTest */
final class Tokenizer
{
    public function tokenize(string $input): Generator
    {
        $length = mb_strlen($input);

        $i = 0;

        while ($i < $length) {
            $byte1 = ord($input[$i]);
            if ($byte1 < 0x80) {
                // Single-byte character
                yield $i++ => $byte1;
                continue;
            }

            if (($byte1 & 0xE0) === 0xC0) {
                // Two-byte character
                $byte2 = ord($input[$i + 1]);
                yield $i => (($byte1 & 0x1F) << 6) | ($byte2 & 0x3F);
                $i += 2;
                continue;
            }

            if (($byte1 & 0xF0) === 0xE0) {
                // Three-byte character
                $byte2 = ord($input[$i + 1]);
                $byte3 = ord($input[$i + 2]);
                yield $i => (($byte1 & 0x0F) << 12) | (($byte2 & 0x3F) << 6) | ($byte3 & 0x3F);
                $i += 3;
                continue;
            }

            if (($byte1 & 0xF8) === 0xF0) {
                // Four-byte character
                $byte2 = ord($input[$i + 1]);
                $byte3 = ord($input[$i + 2]);
                $byte4 = ord($input[$i + 3]);
                yield $i =>
                    (($byte1 & 0x07) << 18) | (($byte2 & 0x3F) << 12) | (($byte3 & 0x3F) << 6) | ($byte4 & 0x3F);
                $i += 4;
                continue;
            }

            // Invalid character
            throw new RuntimeException('Invalid UTF-8 character at : ' . $i);
        }

        yield $i => TokenKind::END_OF_FILE;
    }
}
