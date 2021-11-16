<?php

namespace App\Rules;

use App\Contracts\RuleInterface;

class FalabellaRule implements RuleInterface
{
    public function matches(int $number): bool
    {
        return $number % 3 === 0;
    }

    public function getReplacement(): string
    {
        return 'Falabella';
    }
}