<?php

namespace Tests;

use App\MultiplesPrinter;
use App\Rules\FalabellaRule;
use App\Rules\IntegracionesRule;
use App\Rules\ItRule;
use PHPUnit\Framework\TestCase;

class MultiplesPrinterTest extends TestCase
{
    /**
     * @test
     */
    public function canPrintFalabellaForMultiplesOfThree()
    {
        $rules = [new FalabellaRule];

        $printer = new MultiplesPrinter($rules);

        $list = $printer->generateList(10);

        $expected = ['1', '2', 'Falabella', '4', '5', 'Falabella', '7', '8', 'Falabella', '10'];

        $this->assertEquals($expected, $list);
    }

    /**
     * @test
     */
    public function canPrintITForMultiplesOfFive()
    {
        $rules = [new ItRule];

        $printer = new MultiplesPrinter($rules);

        $list = $printer->generateList(20);

        $expected = [
            '1', '2', '3', '4', 'IT', '6', '7', '8', '9', 'IT',
            '11', '12', '13', '14', 'IT', '16', '17', '18', '19', 'IT'
        ];

        $this->assertEquals($expected, $list);
    }

    /**
     * @test
     */
    public function canPrintIntegracionesForMultiplesOfThreeAndFive()
    {
        $rules = [new IntegracionesRule];

        $printer = new MultiplesPrinter($rules);

        $list = $printer->generateList(20);

        $expected = [
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10',
            '11', '12', '13', '14', 'Integraciones', '16', '17', '18', '19', '20'
        ];

        $this->assertEquals($expected, $list);
    }

}