<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Tests\Unit\Lexer\Token;

use Ghostwriter\Syntax\Tokenizer;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use Ghostwriter\Syntax\Lexer\Token\Token;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Token::class)]
final class TokenTest extends TestCase
{
    /**
     * @var string
     */
    private const TRIVIA = '  ';

    /**
     * @var string
     */
    private const BML = '#BlackLivesMatter';

    public function testToken(): void
    {
        $content = sprintf('%s%s', self::TRIVIA, self::BML);
        $token = new Token(0, 0, 2, mb_strlen($content));

        self::assertSame(0, $token->getKind());
        self::assertSame(2, $token->getStart());
        self::assertSame(17, $token->getWidth());
        self::assertSame(0, $token->getFullStart());
        self::assertSame(19, $token->getFullWidth());

        self::assertSame(self::BML, $token->getText($content));
        self::assertSame($content, $token->getFullText($content));
        self::assertSame(self::TRIVIA, $token->getTriviaText($content));
    }
}
