<?php

namespace App\Multiples;

use App\Contracts\MultipleContract;

class OfThreeAndFive implements MultipleContract
{
    public static function message(): string
    {
        return 'Integraciones';
    }
}