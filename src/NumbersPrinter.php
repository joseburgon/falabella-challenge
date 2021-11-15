<?php

namespace App;

use App\Multiples\OfFive;
use App\Multiples\OfThree;
use App\Multiples\OfThreeAndFive;

class NumbersPrinter
{
    public function print(int $number): string
    {
        switch (0) {
            case $number % 15:
                return OfThreeAndFive::message();
            case $number % 3:
                return OfThree::message();
            case $number % 5:
                return OfFive::message();
            default:
                return (string) $number;
        }
    }
}