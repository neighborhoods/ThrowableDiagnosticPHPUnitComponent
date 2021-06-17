# Throwable Diagnostic PHPUnit Component

Utilities for testing software using [ThrowableDiagnosticComponent](https://github.com/neighborhoods/ThrowableDiagnosticComponent).

* Prevent diagnosis of failed assertions
* Mocks for commonly injected classes

## Install

Via Composer as development dependency
```bash
composer require --dev neighborhoods/throwable-diagnostic-phpunit-component
```

## PHPUnit Decorator

Failed [PHPUnit](https://github.com/sebastianbergmann/phpunit) assertions raise Exceptions. Throwable Diagnostic Component disturbs the Exception based communication between a test case and the PHPUnit framework. The [PHPUnit decorator](src/ThrowableDiagnosticV1Decorators/PhpUnitV1/README.md) prevents Throwable Diagnostic Component from interfering with PHPUnit Exceptions.

## Mocks

TBD
