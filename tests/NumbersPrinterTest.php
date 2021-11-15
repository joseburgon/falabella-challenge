<?php

namespace Tests;

use App\NumbersPrinter;
use PHPUnit\Framework\TestCase;

class NumbersPrinterTest extends TestCase
{
    /**
     * @test
     */
    public function canPrintFalabellaForMultiplesOfThree()
    {
        $expected = 'Falabella';

        $printer = new NumbersPrinter;

        $result = $printer->print(9);

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function canPrintITForMultiplesOfFive()
    {
        $expected = 'IT';

        $printer = new NumbersPrinter;

        $result = $printer->print(10);

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function canPrintIntegracionesForMultiplesOfFive()
    {
        $expected = 'Integraciones';

        $printer = new NumbersPrinter;

        $result = $printer->print(30);

        $this->assertEquals($expected, $result);
    }

    /**
     * @test
     */
    public function canPrintNumberWhenIsMultipleOfNone()
    {
        $expected = '28';

        $printer = new NumbersPrinter;

        $result = $printer->print(28);

        $this->assertEquals($expected, $result);
    }
}