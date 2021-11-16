<?php

namespace App\Rules;

use App\Contracts\RuleInterface;

class ItRule implements RuleInterface
{
    public function matches(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function getReplacement(): string
    {
        return 'IT';
    }
}