<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax\Lexer\Token;

use Ghostwriter\Json\Json;
use Ghostwriter\Syntax\TokenKind;
use JsonSerializable;
use ReflectionClass;
use Stringable;

use function array_flip;
use function mb_substr;

final class Token implements JsonSerializable, Stringable
{
    public function __construct(
        private readonly int $kind,
        private readonly int $start,
        private readonly int $offset,
        private readonly int $length
    ) {
    }

    public function __toString(): string
    {
        return Json::encode($this->jsonSerialize());
    }

    public function getEnd(): int
    {
        return $this->start + $this->length;
    }

    /**
     * @psalm-mutation-free
     */
    public function getFullText(string $document): string
    {
        return mb_substr($document, $this->start, $this->length);
    }

    public function getKind(): int
    {
        return $this->kind;
    }

    public function getLength(): int
    {
        return $this->length;
        return $this->getTriviaLength() + $this->getTextLength();
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @psalm-mutation-free
     */
    public function getText(string $document): string
    {
        return mb_substr($document, $this->offset, $this->getTextLength());
    }

    public function getTextLength(): int
    {
        return $this->length - $this->getTriviaLength();
    }

    /**
     * @psalm-mutation-free
     */
    public function getTrivia(string $document): string
    {
        return mb_substr($document, $this->start, $this->getTriviaLength());
    }

    public function getTriviaLength(): int
    {
        return $this->offset - $this->start;
    }

    public function getWidth(): int
    {
        return $this->start + $this->length;
    }

    /**
     * @psalm-mutation-free
     */
    public function is(int $kind): bool
    {
        return $this->kind === $kind;
    }

    /**
     * @psalm-mutation-free
     */
    public function isNot(int $kind): bool
    {
        return $this->kind !== $kind;
    }

    /**
     * @return array{kind: int|string, width: int, trivia: int, start: int}
     */
    public function jsonSerialize(): array
    {
        return [
            'kind' => self::getTokenKindNameFromValue($this->kind),
            'start' => $this->start,
            'offset' => $this->offset,
            'length' => $this->length,
        ];
    }

    /**
     * Returns the token kind name as a string, or the token number if the name was not found.
     */
    public static function getTokenKindNameFromValue(int $kind): string
    {
        /**
         * A hash map of the format [int $TokenKind => string $TokenName].
         *
         * @var null|array<int,string> $mapToKindName
         */
        static $mapToKindName = null;

        $mapToKindName ??= array_flip((new ReflectionClass(TokenKind::class))->getConstants());

        return $mapToKindName[$kind] ?? 'Unknown';
    }
}
