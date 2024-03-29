# Syntax

[![Compliance](https://github.com/ghostwriter/syntax/actions/workflows/compliance.yml/badge.svg)](https://github.com/ghostwriter/syntax/actions/workflows/compliance.yml)
[![Supported PHP Version](https://badgen.net/packagist/php/ghostwriter/syntax?color=8892bf)](https://www.php.net/supported-versions)
[![Mutation Coverage](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fghostwriter%2Fsyntax%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/ghostwriter/syntax/main)
[![Code Coverage](https://codecov.io/gh/ghostwriter/syntax/branch/main/graph/badge.svg)](https://codecov.io/gh/ghostwriter/syntax)
[![Type Coverage](https://shepherd.dev/github/ghostwriter/syntax/coverage.svg)](https://shepherd.dev/github/ghostwriter/syntax)
[![Latest Version on Packagist](https://badgen.net/packagist/v/ghostwriter/syntax)](https://packagist.org/packages/ghostwriter/syntax)
[![Downloads](https://badgen.net/packagist/dt/ghostwriter/syntax?color=blue)](https://packagist.org/packages/ghostwriter/syntax)

Lexical Analysis library for PHP (Lexer, Tokenizer, Parser, Generator)

> **Warning**
>
> This project is not finished yet, work in progress.


## Installation

You can install the package via composer:

``` bash
composer require ghostwriter/syntax
```

## Usage

```php
// work in progress
```

## Commands

```bash
# This is for development; dogfooding to parse and generate the AST for test fixture files.
syntax /path/to/file.php 

# -s|--save: Save or Update the AST of the PHP file as JSON file ['file.php => file.php.json'] in the same location.
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG.md](./CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email `nathanael.esayeas@protonmail.com` instead of using the issue tracker.

## Support

[[`Become a GitHub Sponsor`](https://github.com/sponsors/ghostwriter)]

## Credits

- [Nathanael Esayeas](https://github.com/ghostwriter)
- [All Contributors](https://github.com/ghostwriter/syntax/contributors)

## License

The BSD-3-Clause. Please see [License File](./LICENSE) for more information.
