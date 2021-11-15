<?php

namespace App\Multiples;

use App\Contracts\MultipleContract;

class OfFive implements MultipleContract
{
    public static function message(): string
    {
        return 'IT';
    }
}