<br>

<div align="center">
<img width="456" src="https://raw.githubusercontent.com/wayofdev/laravel-package-tpl/master/assets/logo.gh-light-mode-only.png#gh-light-mode-only" alt="WayOfDev Logo for light theme">
<img width="456" src="https://raw.githubusercontent.com/wayofdev/laravel-package-tpl/master/assets/logo.gh-dark-mode-only.png#gh-dark-mode-only" alt="WayOfDev Logo for dark theme">
</div>


<br>

<br>

<div align="center">
<a href="https://github.com/wayofdev/laravel-package-tpl/actions"><img alt="Build Status" src="https://img.shields.io/endpoint.svg?url=https%3A%2F%2Factions-badge.atrox.dev%2Fwayofdev%2Flaravel-package-tpl%2Fbadge&style=flat-square"/></a>
<a href="https://packagist.org/packages/wayofdev/laravel-package-tpl"><img src="https://img.shields.io/packagist/dt/wayofdev/laravel-package-tpl?&style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/wayofdev/laravel-package-tpl"><img src="https://img.shields.io/packagist/v/wayofdev/laravel-package-tpl?&style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/wayofdev/laravel-package-tpl"><img src="https://img.shields.io/packagist/l/wayofdev/laravel-package-tpl?style=flat-square&color=blue" alt="Software License"/></a>
<a href="https://packagist.org/packages/wayofdev/laravel-package-tpl"><img alt="Commits since latest release" src="https://img.shields.io/github/commits-since/wayofdev/laravel-package-tpl/latest?style=flat-square"></a>
<a href="https://packagist.org/packages/wayofdev/laravel-package-tpl"><img alt="PHP Version Require" src="https://poser.pugx.org/wayofdev/laravel-package-tpl/require/php?style=flat-square"></a>
<a href="https://app.codecov.io/gh/wayofdev/laravel-package-tpl"><img alt="Codecov" src="https://img.shields.io/codecov/c/github/wayofdev/laravel-package-tpl?style=flat-square&logo=codecov"></a>
</div>

<br>

# Laravel Package Template

This is a template repository designed to kick-start the development of Laravel packages with essential tools and setups pre-configured.

<br>

If you **like/use** this package, please consider ⭐️ **starring** it. Thanks!

![Screenshot](assets/screenshot.png)

## 🚀 Features

This template repository includes several features to streamline the development of Laravel packages:

### → Testing

- Configured [PHPUnit](https://phpunit.de/index.html) for unit testing.
- Integrated [Pest PHP](https://pestphp.com) for elegant testing.
- [Orchestra Testbench](https://packages.tools/testbench.html) for Laravel package testing.
- [PHPStan](https://phpstan.org) extensions for PHPUnit and Laravel.
- Infection for mutation testing to ensure quality.

### → Static Analysis

- [PHPStan](https://phpstan.org) for static analysis, ensuring code quality and robustness.
- [Larastan](https://github.com/larastan/larastan) for Laravel-specific static analysis.
- [PHPStan strict rules](https://github.com/phpstan/phpstan-strict-rules) for enforcing strict type checks and standards.

### → Coding Standards:

- [PHP CS Fixer](https://github.com/wayofdev/php-cs-fixer-config) with custom configuration for consistent code style.
- [Composer Normalize](https://github.com/ergebnis/composer-normalize) to ensure a consistent `composer.json` format.

### → Continuous Integration

- Automated testing with code coverage report generation using PHPUnit and Xdebug, uploaded to [Codecov](https://about.codecov.io).
- Automated linting of YAML files and PHP code to ensure consistency and adherence to best practices.
- Checks for outdated or insecure dependencies using Composer.
- Mutation testing with [Infection](https://github.com/infection/infection) to assess the quality of the test suite.
- Security checks to identify vulnerabilities in dependencies.
- Comprehensive static analysis with [PHPStan](https://phpstan.org) to detect potential issues early.
- Extensive testing across different setups to ensure compatibility and stability.

### → Development Environment

- Docker support for consistent development environments.
- [Pre-commit](https://pre-commit.com) hooks setup to ensure code quality before commits.

### → Issue Templates

* This package is equipped with a set of ready-to-use issue templates to streamline contributions and issue reporting.

  You can find these templates organized in the `.github/ISSUE_TEMPLATE` directory.

### → Miscellaneous

- Support for PHP 8.2 and Laravel 10.x/11.x.
- Configured autoload and autoload-dev for optimal namespace management.

<br>

## 💿 Installation

To use this template, clone the repository and install the dependencies:

```bash
$ git clone https://github.com/wayofdev/laravel-package-tpl.git
$ cd laravel-package-tpl

$ composer install
```

<br>

## 🧪 Running Tests

### → PHPUnit tests

To run tests, run the following command:

```bash
$ make test
```

### → Static Analysis

Code quality using PHPStan:

```bash
$ make lint-stan
```

### → Coding Standards Fixing

Fix code using The PHP Coding Standards Fixer (PHP CS Fixer) to follow our standards:

```bash
$ make lint-php
```

### → Lint Yaml files

Lint all yaml files in project:

```bash
$ make lint-yaml
```

<br>

## 🤝 License

[![Licence](https://img.shields.io/github/license/wayofdev/laravel-package-tpl?style=for-the-badge&color=blue)](./LICENSE.md)

<br>

## 🔒 Security Policy

This project has a [security policy](.github/SECURITY.md).

<br>

## 📥 Contributing

Please read and follow our [contribution guide](.github/CONTRIBUTING.md).

<br>

## 🙆🏼‍♂️ Author Information

Created in **2022** by [lotyp / wayofdev](https://github.com/wayofdev)

Follow [@wayofdev](https://twitter.com/intent/follow?screen_name=wayofdev) on X (Twitter).

<br>
