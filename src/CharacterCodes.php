<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax;

final class CharacterCodes
{
    /**
     * @var int "A"
     */
    public const A = 0x41;

    /**
     * @var int "&"
     */
    public const AMPERSAND = 0x26;

    /**
     * @var int "*"
     */
    public const ASTERISK = 0x2A;

    /**
     * @var int "@"
     */
    public const AT = 0x40;

    /**
     * @var int "B"
     */
    public const B = 0x42;

    /**
     * @var int "\"
     */
    public const BACKSLASH = 0x5C;

    /**
     * @var int "\b"
     */
    public const BACKSPACE = 0x08;

    /**
     * @var int "`"
     */
    public const BACKTICK = 0x60;

    /**
     * @var int "|"
     */
    public const BAR = 0x7C;

    /**
     * @var int
     */
    public const BYTE_ORDER_MARK = 0xFEFF;

    /**
     * @var int "C"
     */
    public const C = 0x43;

    /**
     * @var int "^"
     */
    public const CARET = 0x5E;

    /**
     * @var int "}"
     */
    public const CLOSE_BRACE = 0x7D;

    /**
     * @var int "]"
     */
    public const CLOSE_BRACKET = 0x5D;

    /**
     * @var int ")"
     */
    public const CLOSE_PARENTHESES = 0x29;

    /**
     * @var int ":"
     */
    public const COLON = 0x3A;

    /**
     * @var int ";"
     */
    public const COMMA = 0x2C;

    /**
     * @var int "D"
     */
    public const D = 0x44;

    /**
     * @var int "$"
     */
    public const DOLLAR = 0x24;

    /**
     * @var int "."
     */
    public const DOT = 0x2E;

    /**
     * @var int '"'
     */
    public const DOUBLE_QUOTE = 0x22;

    /**
     * @var int "E"
     */
    public const E = 0x45;

    /**
     * @var int "="
     */
    public const EQUALS = 0x3D;

    /**
     * @var int "!"
     */
    public const EXCLAMATION = 0x21;

    /**
     * @var int "F"
     */
    public const F = 0x46;

    /**
     * @var int "\f"
     */
    public const FORM_FEED = 0x0C;

    /**
     * @var int "G"
     */
    public const G = 0x47;

    /**
     * @var int ">"
     */
    public const GREATER_THAN = 0x3E;

    /**
     * @var int "H"
     */
    public const H = 0x48;

    /**
     * @var int "#"
     */
    public const HASH = 0x23;

    /**
     * @var int "I"
     */
    public const I = 0x49;

    /**
     * @var int "J"
     */
    public const J = 0x4A;

    /**
     * @var int "K"
     */
    public const K = 0x4B;

    /**
     * @var int "L"
     */
    public const L = 0x4C;

    /**
     * @var int "<"
     */
    public const LESS_THAN = 0x3C;

    /**
     * @var int "M"
     */
    public const M = 0x4D;

    /**
     * @var int "-"
     */
    public const MINUS = 0x2D;

    /**
     * @var int "N"
     */
    public const N = 0x4E;

    /**
     * @var int "\n"
     */
    public const NEWLINE = 0x0A;

    /**
     * @var int 0x00
     */
    public const NULL_POINTER = 0x00;

    /**
     * @var int "O"
     */
    public const O = 0x4F;

    /**
     * @var int "{"
     */
    public const OPEN_BRACE = 0x7B;

    /**
     * @var int "["
     */
    public const OPEN_BRACKET = 0x5B;

    /**
     * @var int "("
     */
    public const OPEN_PARENTHESES = 0x28;

    /**
     * @var int "P"
     */
    public const P = 0x50;

    /**
     * @var int "%"
     */
    public const PERCENT = 0x25;

    /**
     * @var int "+"
     */
    public const PLUS = 0x2B;

    /**
     * @var int "Q"
     */
    public const Q = 0x51;

    /**
     * @var int "?"
     */
    public const QUESTION = 0x3F;

    /**
     * @var int "R"
     */
    public const R = 0x52;

    /**
     * @var int "\r"
     */
    public const RETURN = 0x0D;

    /**
     * @var int "S"
     */
    public const S = 0x53;

    /**
     * @var int ";"
     */
    public const SEMICOLON = 0x3B;

    /**
     * @var int "'"
     */
    public const SINGLE_QUOTE = 0x27;

    /**
     * @var int "/"
     */
    public const SLASH = 0x2F;

    /**
     * @var int "' '"
     */
    public const SPACE = 0x20;

    /**
     * @var int "T"
     */
    public const T = 0x54;

    /**
     * @var int "\t"
     */
    public const TAB = 0x09;

    /**
     * @var int "~"
     */
    public const TILDE = 0x7E;

    /**
     * @var int "U"
     */
    public const U = 0x55;

    /**
     * @var int "_"
     */
    public const UNDERSCORE = 0x5F;

    /**
     * @var int "V"
     */
    public const V = 0x56;

    /**
     * @var int "\v"
     */
    public const VERTICAL_TAB = 0x0B;

    /**
     * @var int "W"
     */
    public const W = 0x57;

    /**
     * @var int "X"
     */
    public const X = 0x58;

    /**
     * @var int "Y"
     */
    public const Y = 0x59;

    /**
     * @var int "Z"
     */
    public const Z = 0x5a;

    /**
     * @var int "0"
     */
    public const _0 = 0x30;

    /**
     * @var int "1"
     */
    public const _1 = 0x31;

    /**
     * @var int "2"
     */
    public const _2 = 0x32;

    /**
     * @var int "3"
     */
    public const _3 = 0x33;

    /**
     * @var int "4"
     */
    public const _4 = 0x34;

    /**
     * @var int "5"
     */
    public const _5 = 0x35;

    /**
     * @var int "6"
     */
    public const _6 = 0x36;

    /**
     * @var int "7"
     */
    public const _7 = 0x37;

    /**
     * @var int "8"
     */
    public const _8 = 0x38;

    /**
     * @var int "9"
     */
    public const _9 = 0x39;

    /**
     * @var int "a"
     */
    public const a = 0x61;

    /**
     * @var int "b"
     */
    public const b = 0x62;

    /**
     * @var int "c"
     */
    public const c = 0x63;

    /**
     * @var int "d"
     */
    public const d = 0x64;

    /**
     * @var int "e"
     */
    public const e = 0x65;

    /**
     * @var int "f"
     */
    public const f = 0x66;

    /**
     * @var int "g"
     */
    public const g = 0x67;

    /**
     * @var int "h"
     */
    public const h = 0x68;

    /**
     * @var int "i"
     */
    public const i = 0x69;

    /**
     * @var int "j"
     */
    public const j = 0x6A;

    /**
     * @var int "k"
     */
    public const k = 0x6B;

    /**
     * @var int "l"
     */
    public const l = 0x6C;

    /**
     * @var int "m"
     */
    public const m = 0x6D;

    /**
     * @var int "n"
     */
    public const n = 0x6E;

    /**
     * @var int "o"
     */
    public const o = 0x6F;

    /**
     * @var int "p"
     */
    public const p = 0x70;

    /**
     * @var int "q"
     */
    public const q = 0x71;

    /**
     * @var int "r"
     */
    public const r = 0x72;

    /**
     * @var int "s"
     */
    public const s = 0x73;

    /**
     * @var int "t"
     */
    public const t = 0x74;

    /**
     * @var int "u"
     */
    public const u = 0x75;

    /**
     * @var int "v"
     */
    public const v = 0x76;

    /**
     * @var int "w"
     */
    public const w = 0x77;

    /**
     * @var int "x"
     */
    public const x = 0x78;

    /**
     * @var int "y"
     */
    public const y = 0x79;

    /**
     * @var int "z"
     */
    public const z = 0x7A;
}
