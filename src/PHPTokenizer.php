<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax;

use Generator;
use PhpToken;

use function mb_strlen;
use function str_starts_with;

/** @see TokenizerTest */
final class PHPTokenizer
{
    private const PHP_OPEN_STRING = '<?php ';

    /**
     * @return Generator<int, Token>
     */
    public function tokenize(string $input): Generator
    {
        $addOpenTag = ! str_starts_with($input, self::PHP_OPEN_STRING);

        $tokens = PhpToken::tokenize($addOpenTag ? self::PHP_OPEN_STRING . $input : $input);

        if ($addOpenTag) {
            unset($tokens[0]);
        }

        // The starting position (0-based) in the tokenized string.
        $start = $end = $offset = 0;
        foreach ($tokens as $token) {
            $end += mb_strlen($token->text);

            // One of the T_* constants, or an integer < 256 representing a single-char token.
            yield $start => new Token($token->id, $start, $offset, $end - $start);

            $start = $offset = $end;
        }

        yield $start => new Token(TokenKind::END_OF_FILE, $start, $offset, $end - $start);
    }
}

final class Token
{
    public function __construct(
        public int $type,
        public int $start,
        public int $offset,
        public int $length,
    ) {
    }
}
