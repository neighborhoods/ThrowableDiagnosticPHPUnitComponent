# PHPUnit V1
This Throwable Diagnostic Decorator helps integrate with [PHPUnit](https://github.com/sebastianbergmann/phpunit).

An exception is thrown when a PHPUnit assertion fails. If this decorator is not part of the decorator stack, the PHPUnit exception will be diagnosed as non-transient causing the test case to error instead of failing. The error message doesn't include the assertion message, which makes it harder to understand and fix the problem.

This implementation should work with any PHPUnit version.

## Paths
Unlike other decorators this is applied to the core of ThrowableDiagnostic using Symfony DI. This decorator will be added to all existing decorator stacks by including the path of this decorator in the container builder. Therefore, this path should only be added in the test container.

```php
$testContainerBuilder
    // Your test container should already include the fab and src folders of ThrowableDiagnosticV1
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/fab/ThrowableDiagnosticV1')
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-component/src/ThrowableDiagnosticV1')
    // This will add PhpUnitV1 to all existing decorator stacks
    ->addSourcePath('vendor/neighborhoods/throwable-diagnostic-phpunit-component/src/ThrowableDiagnosticV1Decorators/PhpUnitV1');
```
