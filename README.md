# Syntax

[![Automation](https://github.com/ghostwriter/syntax/actions/workflows/automation.yml/badge.svg)](https://github.com/ghostwriter/syntax/actions/workflows/automation.yml)
[![PHP Version](https://badgen.net/packagist/php/ghostwriter/syntax?color=777BB4)](https://www.php.net/supported-versions)
[![Packagist Downloads](https://badgen.net/packagist/dt/ghostwriter/syntax?color=F28D1A)](https://packagist.org/packages/ghostwriter/syntax)
[![PayPal](https://img.shields.io/badge/paypal-@codepoet-0079C1?logo=paypal&logoColor=002991)](https://paypal.me/codepoet)
[![Sponsors via GitHub](https://img.shields.io/github/sponsors/ghostwriter?label=Sponsor+@ghostwriter/syntax&logo=GitHub+Sponsors)](https://github.com/sponsors/ghostwriter)

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
