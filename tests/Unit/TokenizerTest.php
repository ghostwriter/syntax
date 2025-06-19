<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\Syntax\CharacterCodes;
use Ghostwriter\Syntax\Tokenizer;
use Ghostwriter\Syntax\TokenKind;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

use function iterator_to_array;

#[CoversClass(Tokenizer::class)]
/**
 * @internal
 *
 * @small
 *
 * @coversNothing
 */
final class TokenizerTest extends TestCase
{
    /**
     * @var string
     */
    public const BLM = '#BlackLivesMatter';

    /**
     * @var int
     */
    public const ElephantEmoji = 128024;

    public function testTokenizeString(): void
    {
        $tokenizer = new Tokenizer();

        $tokens = $tokenizer->tokenize(self::BLM);

        self::assertSame([
            CharacterCodes::HASH,
            CharacterCodes::B,
            CharacterCodes::l,
            CharacterCodes::a,
            CharacterCodes::c,
            CharacterCodes::k,
            CharacterCodes::L,
            CharacterCodes::i,
            CharacterCodes::v,
            CharacterCodes::e,
            CharacterCodes::s,
            CharacterCodes::M,
            CharacterCodes::a,
            CharacterCodes::t,
            CharacterCodes::t,
            CharacterCodes::e,
            CharacterCodes::r,
            TokenKind::END_OF_FILE,
        ], iterator_to_array($tokens));
    }

    public function testTokenizingAnEmojiMustTheMultiByteCodePointAndAnEndOfFileToken(): void
    {
        $tokenizer = new Tokenizer();

        $tokens = $tokenizer->tokenize('🐘');

        self::assertSame([
            0 => self::ElephantEmoji,
            4 => TokenKind::END_OF_FILE,
        ], iterator_to_array($tokens));
    }

    public function testTokenizingAnEmptyStringMustReturnAnEndOfFileToken(): void
    {
        $tokenizer = new Tokenizer();

        $tokens = $tokenizer->tokenize('');

        self::assertSame([TokenKind::END_OF_FILE], iterator_to_array($tokens));
    }
}
