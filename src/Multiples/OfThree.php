<?php

namespace App\Multiples;

use App\Contracts\MultipleContract;

class OfThree implements MultipleContract
{
    public static function message(): string
    {
        return 'Falabella';
    }
}