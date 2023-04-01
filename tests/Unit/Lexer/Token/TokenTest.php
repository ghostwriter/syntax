<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Tests\Unit\Lexer\Token;

use Ghostwriter\Syntax\Lexer\Token\Token;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Ghostwriter\Syntax\Lexer\Token\Token
 *
 * @internal
 *
 * @small
 */
final class TokenTest extends TestCase
{
    public function testToken(): void
    {
        $trivia = '  ';
        $bml = '#BlackLivesMatter';
        $content = sprintf('%s%s', $trivia, $bml);
        $token = new Token(0, 0, 2, mb_strlen($content));

        self::assertSame(0, $token->getKind());
        self::assertSame(2, $token->getStart());
        self::assertSame(17, $token->getWidth());
        self::assertSame(0, $token->getFullStart());
        self::assertSame(19, $token->getFullWidth());

        self::assertSame($bml, $token->getText($content));
        self::assertSame($content, $token->getFullText($content));
        self::assertSame($trivia, $token->getTriviaText($content));
    }
}
