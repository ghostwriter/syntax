<?php

declare(strict_types=1);

namespace Ghostwriter\Plex\Lexer\Token;

use Ghostwriter\Json\Json;
use Ghostwriter\Plex\TokenKind;
use ReflectionClass;
use Stringable;
use function array_flip;

final class Token implements Stringable
{
    public function __construct(
        private int $kind = 0,
        private int $trivia = 0,
        private int $start = 0,
        private int $width = 0
    ) {
        // "  text"
        // 0,0,2,6

        //        private int $kind = 0,
        //        private int $trivia = 0,
        //        private int $start = 2,
        //        private int $width = 6

        // Set(["kind","escapedText","originalKeywordKind","isInJSDocNamespace","text","flags","decorators",
        //"modifiers","parent","getSourceFile","getChildCount","getChildAt","getChildren",
        //"getStart",
        //"getFullStart","getEnd","getWidth","getFullWidth","getLeadingTriviaWidth","getFullText","getText",
        //"getFirstToken","getLastToken","forEachChild","pos","end",])],
    }

    public function __toString(): string
    {
        return Json::encode($this->jsonSerialize());
    }

    public function getEnd(): int
    {
        return $this->trivia + $this->width;
    }

    public function getFullStart(): int
    {
        return $this->trivia;
    }

    /** @psalm-mutation-free */
    public function getFullText(string $document): string
    {
        return mb_substr($document, $this->trivia, $this->width);
    }

    public function getFullWidth(): int
    {
        return $this->trivia + $this->width;
    }

    public function getKind(): int
    {
        return $this->kind;
    }

    /** @psalm-mutation-free */
    public function getLeadingTrivia(string $document): string
    {
        return mb_substr($document, $this->trivia, $this->start - $this->trivia);
    }

    public function getStart(): int
    {
        return $this->start;
    }

    /** @psalm-mutation-free */
    public function getText(string $document): string
    {
        return mb_substr($document, $this->start, $this->width - ($this->start - $this->trivia));
    }

    /**
     * Returns the token kind name as a string, or the token number if the name was not found.
     */
    public static function getTokenKindNameFromValue(int $kind): int|string
    {
        /**
         * A hash map of the format [int $TokenKind => string $TokenName].
         *
         * @var null|array<string> $mapToKindName
         */
        static $mapToKindName = null;

        $mapToKindName ??= array_flip((new ReflectionClass(TokenKind::class))->getConstants());

        return $mapToKindName[$kind] ?? $kind;
    }

    public function getTriviaText(string $document): string
    {
        return mb_substr($document, $this->trivia, $this->start);
    }

    public function getWidth(): int
    {
        return $this->width + ($this->trivia - $this->start);
    }

    public function is(int $kind): bool
    {
        return $this->kind === $kind;
    }

    public function isNot(int $kind): bool
    {
        return $this->kind !== $kind;
    }

    public function jsonSerialize(): array
    {
        return [
            'kind' => self::getTokenKindNameFromValue($this->kind),
            'width' => $this->width,
            'trivia' => $this->trivia,
            'start' => $this->start,
        ];
    }
}
