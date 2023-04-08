<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Tests\Unit\Lexer\Token;

use Ghostwriter\Syntax\Lexer\Token\Token;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\TestCase;

#[Small]
#[CoversClass(Token::class)]
final class TokenTest extends TestCase
{
    /**
     * @var string
     */
    private const BML = 'BlackLivesMatter';

    /**
     * @var string
     */
    private const TRIVIA = '#';

    public function testToken(): void
    {
        $start = 0;
        $document = sprintf('%s%s%s', str_repeat(' ', $start), self::TRIVIA, self::BML);
        $documentLength = mb_strlen($document);
        $triviaLength = mb_strlen(self::TRIVIA);
        $textLength = mb_strlen(self::BML);
        $offset = $start + $triviaLength;

        $token = new Token(0, $start, $offset, $documentLength);

        self::assertSame($triviaLength, $token->getTriviaLength());
        self::assertSame($textLength + $start, $token->getTextLength());
        self::assertSame($documentLength + $start, $token->getWidth());

        self::assertSame(ltrim($document), $token->getFullText($document));
        self::assertSame(self::TRIVIA, $token->getTrivia($document));
        self::assertSame(self::BML, $token->getText($document));
        self::assertSame($triviaLength, mb_strlen($token->getTrivia($document)));
        self::assertSame($textLength, mb_strlen($token->getText($document)));

        self::assertSame(0, $token->getKind());
        self::assertSame(0, $token->getStart());
        self::assertSame(1, $token->getOffset());
        self::assertSame(17, $token->getLength());
        self::assertSame(17, $token->getEnd());

        self::assertSame(1, $token->getTriviaLength());
        self::assertSame(16, $token->getTextLength());
        self::assertSame(17, $token->getWidth());

        self::assertTrue($token->is(0));
        self::assertTrue($token->isNot(1));
    }
}
