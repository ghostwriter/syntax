<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax;

final class TokenStringMaps
{
    /**
     * @var array<string, mixed>
     */
    public const KEYWORDS = [
        'abstract' => KeywordKind::AbstractKeyword,
        'and' => KeywordKind::AndKeyword,
        'array' => KeywordKind::ArrayKeyword,
        'as' => KeywordKind::AsKeyword,
        'break' => KeywordKind::BreakKeyword,
        'callable' => KeywordKind::CallableKeyword,
        'case' => KeywordKind::CaseKeyword,
        'catch' => KeywordKind::CatchKeyword,
        'class' => KeywordKind::ClassKeyword,
        'clone' => KeywordKind::CloneKeyword,
        'const' => KeywordKind::ConstKeyword,
        'continue' => KeywordKind::ContinueKeyword,
        'declare' => KeywordKind::DeclareKeyword,
        'default' => KeywordKind::DefaultKeyword,
        'die' => KeywordKind::DieKeyword,
        'do' => KeywordKind::DoKeyword,
        'echo' => KeywordKind::EchoKeyword,
        'else' => KeywordKind::ElseKeyword,
        'elseif' => KeywordKind::ElseIfKeyword,
        'empty' => KeywordKind::EmptyKeyword,
        'enddeclare' => KeywordKind::EndDeclareKeyword,
        'endfor' => KeywordKind::EndForKeyword,
        'endforeach' => KeywordKind::EndForEachKeyword,
        'endif' => KeywordKind::EndIfKeyword,
        'endswitch' => KeywordKind::EndSwitchKeyword,
        'endwhile' => KeywordKind::EndWhileKeyword,
        'enum' => KeywordKind::EnumKeyword,
        'eval' => KeywordKind::EvalKeyword,
        'exit' => KeywordKind::ExitKeyword,
        'extends' => KeywordKind::ExtendsKeyword,
        'final' => KeywordKind::FinalKeyword,
        'finally' => KeywordKind::FinallyKeyword,
        'for' => KeywordKind::ForKeyword,
        'foreach' => KeywordKind::ForeachKeyword,
        'fn' => KeywordKind::FnKeyword,
        'function' => KeywordKind::FunctionKeyword,
        'global' => KeywordKind::GlobalKeyword,
        'goto' => KeywordKind::GotoKeyword,
        'if' => KeywordKind::IfKeyword,
        'implements' => KeywordKind::ImplementsKeyword,
        'include' => KeywordKind::IncludeKeyword,
        'include_once' => KeywordKind::IncludeOnceKeyword,
        'instanceof' => KeywordKind::InstanceOfKeyword,
        'insteadof' => KeywordKind::InsteadOfKeyword,
        'interface' => KeywordKind::InterfaceKeyword,
        'isset' => KeywordKind::IsSetKeyword,
        'list' => KeywordKind::ListKeyword,
        'match' => KeywordKind::MatchKeyword,
        'namespace' => KeywordKind::NamespaceKeyword,
        'new' => KeywordKind::NewKeyword,
        'or' => KeywordKind::OrKeyword,
        'print' => KeywordKind::PrintKeyword,
        'private' => KeywordKind::PrivateKeyword,
        'protected' => KeywordKind::ProtectedKeyword,
        'public' => KeywordKind::PublicKeyword,
        'readonly' => KeywordKind::ReadonlyKeyword,
        'require' => KeywordKind::RequireKeyword,
        'require_once' => KeywordKind::RequireOnceKeyword,
        'return' => KeywordKind::ReturnKeyword,
        'static' => KeywordKind::StaticKeyword,
        'switch' => KeywordKind::SwitchKeyword,
        'throw' => KeywordKind::ThrowKeyword,
        'trait' => KeywordKind::TraitKeyword,
        'try' => KeywordKind::TryKeyword,
        'unset' => KeywordKind::UnsetKeyword,
        'use' => KeywordKind::UseKeyword,
        'var' => KeywordKind::VarKeyword,
        'while' => KeywordKind::WhileKeyword,
        'xor' => KeywordKind::XorKeyword,
        'yield' => KeywordKind::YieldKeyword,
        'yield from' => KeywordKind::YieldFromKeyword,
    ];

    /**
     * @var array<string, mixed>
     */
    public const OPERATORS_AND_PUNCTUATORS = [
        '[' => TokenKind::OpenBracketToken,
        ']' => TokenKind::CloseBracketToken,
        '(' => TokenKind::OpenParenToken,
        ')' => TokenKind::CloseParenToken,
        '{' => TokenKind::OpenBraceToken,
        '}' => TokenKind::CloseBraceToken,
        '.' => TokenKind::DotToken,
        '->' => TokenKind::ArrowToken,
        '=>' => TokenKind::DoubleArrowToken,
        '++' => TokenKind::PlusPlusToken,
        '--' => TokenKind::MinusMinusToken,
        '**' => TokenKind::AsteriskAsteriskToken,
        '*' => TokenKind::AsteriskToken,
        '+' => TokenKind::PlusToken,
        '-' => TokenKind::MinusToken,
        '~' => TokenKind::TildeToken,
        '!' => TokenKind::ExclamationToken,
        '$' => TokenKind::DollarToken,
        '/' => TokenKind::SlashToken,
        '%' => TokenKind::PercentToken,
        '<<' => TokenKind::LessThanLessThanToken,
        '>>' => TokenKind::GreaterThanGreaterThanToken,
        '<' => TokenKind::LessThanToken,
        '>' => TokenKind::GreaterThanToken,
        '<=' => TokenKind::LessThanEqualsToken,
        '>=' => TokenKind::GreaterThanEqualsToken,
        '==' => TokenKind::EqualsEqualsToken,
        '===' => TokenKind::EqualsEqualsEqualsToken,
        '!=' => TokenKind::ExclamationEqualsToken,
        '!==' => TokenKind::ExclamationEqualsEqualsToken,
        '^' => TokenKind::CaretToken,
        '|' => TokenKind::BarToken,
        '&' => TokenKind::AmpersandToken,
        '&&' => TokenKind::AmpersandAmpersandToken,
        '||' => TokenKind::BarBarToken,
        '?' => TokenKind::QuestionToken,
        ':' => TokenKind::ColonToken,
        '::' => TokenKind::ColonColonToken,
        ';' => TokenKind::SemicolonToken,
        '=' => TokenKind::EqualsToken,
        '**=' => TokenKind::AsteriskAsteriskEqualsToken,
        '*=' => TokenKind::AsteriskEqualsToken,
        '/=' => TokenKind::SlashEqualsToken,
        '%=' => TokenKind::PercentEqualsToken,
        '+=' => TokenKind::PlusEqualsToken,
        '-=' => TokenKind::MinusEqualsToken,
        '.=' => TokenKind::DotEqualsToken,
        '<<=' => TokenKind::LessThanLessThanEqualsToken,
        '>>=' => TokenKind::GreaterThanGreaterThanEqualsToken,
        '&=' => TokenKind::AmpersandEqualsToken,
        '^=' => TokenKind::CaretEqualsToken,
        '|=' => TokenKind::BarEqualsToken,
        ',' => TokenKind::CommaToken,
        '?->' => TokenKind::QuestionArrowToken,
        '??' => TokenKind::QuestionQuestionToken,
        '??=' => TokenKind::QuestionQuestionEqualsToken,
        '<=>' => TokenKind::LessThanEqualsGreaterThanToken,
        '<>' => TokenKind::LessThanGreaterThanToken,
        '...' => TokenKind::DotDotDotToken,
        '\\' => TokenKind::BackslashToken,
        '<?=' => TokenKind::ScriptSectionStartWithEchoTag, // TODO, technically not an operator
        '<?php ' => TokenKind::ScriptSectionStartTag, // TODO, technically not an operator
        "<?php\t" => TokenKind::ScriptSectionStartTag, // TODO add tests
        "<?php\n" => TokenKind::ScriptSectionStartTag,
        "<?php\r" => TokenKind::ScriptSectionStartTag,
        "<?php\r\n" => TokenKind::ScriptSectionStartTag,
        '?>' => TokenKind::ScriptSectionEndTag, // TODO, technically not an operator
        "?>\n" => TokenKind::ScriptSectionEndTag, // TODO, technically not an operator
        "?>\r\n" => TokenKind::ScriptSectionEndTag, // TODO, technically not an operator
        "?>\r" => TokenKind::ScriptSectionEndTag, // TODO, technically not an operator
        '@' => TokenKind::AtSymbolToken, // TODO not in spec
        '`' => TokenKind::BacktickToken,
    ];

    /**
     * @var array<string, mixed>
     */
    public const RESERVED_WORDS = [
        // http://php.net/manual/en/reserved.constants.php
        // TRUE, FALSE, NULL are special predefined constants
        // TODO - also consider adding other constants
        'true' => TokenKind::TrueReservedWord,
        'false' => TokenKind::FalseReservedWord,
        'null' => TokenKind::NullReservedWord,

        // RESERVED WORDS:
        // http://php.net/manual/en/reserved.other-reserved-words.php
        'int' => TokenKind::IntReservedWord,
        'float' => KeywordKind::FloatReservedWord,
        'bool' => KeywordKind::BoolReservedWord,
        'string' => KeywordKind::StringReservedWord,
        'binary' => KeywordKind::BinaryReservedWord,
        'boolean' => KeywordKind::BooleanReservedWord,
        'double' => KeywordKind::DoubleReservedWord,
        'integer' => KeywordKind::IntegerReservedWord,
        'object' => KeywordKind::ObjectReservedWord,
        'real' => KeywordKind::RealReservedWord,
        'void' => KeywordKind::VoidReservedWord,
        'iterable' => KeywordKind::IterableReservedWord,
        'mixed' => KeywordKind::MixedReservedWord,
        'never' => KeywordKind::NeverReservedWord,
    ];
}
