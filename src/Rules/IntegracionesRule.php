<?php

namespace App\Rules;

use App\Contracts\RuleInterface;

class IntegracionesRule implements RuleInterface
{
    public function matches(int $number): bool
    {
        return $number % 3 === 0 && $number % 5 === 0;
    }

    public function getReplacement(): string
    {
        return 'Integraciones';
    }
}