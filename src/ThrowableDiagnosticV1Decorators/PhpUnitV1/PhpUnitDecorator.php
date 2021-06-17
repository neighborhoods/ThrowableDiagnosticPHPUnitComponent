<?php

declare(strict_types=1);

namespace Neighborhoods\ThrowableDiagnosticPHPUnitComponent\ThrowableDiagnosticV1Decorators\PhpUnitV1;

use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnosticV1\ThrowableDiagnosticInterface;
use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnosticV1\ThrowableDiagnostic;
use Neighborhoods\ThrowableDiagnosticComponent\ThrowableDiagnosticV1\ThrowableDiagnostic\DecoratorInterface;
use Throwable;

final class PhpUnitDecorator implements DecoratorInterface
{
    use ThrowableDiagnostic\AwareTrait;

    public function diagnose(Throwable $throwable): ThrowableDiagnosticInterface
    {
        // Preserve PHPUnit exceptions.
        // Check namespace to determine if an exception is a PHPUnit exception.
        if (strpos(get_class($throwable), 'PHPUnit\\') === 0) {
            throw $throwable;
        }

        $this->getThrowableDiagnosticV1ThrowableDiagnostic()->diagnose($throwable);

        return $this;
    }
}
