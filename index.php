<?php

use App\NumbersPrinter;
use App\Rules\FalabellaRule;
use App\Rules\IntegracionesRule;
use App\Rules\ItRule;

require __DIR__ . '/vendor/autoload.php';

$rules = [
    new IntegracionesRule,
    new FalabellaRule,
    new ItRule
];

$printer = new NumbersPrinter($rules);

$list = $printer->generateList(100);

echo '<h1>Numbers Printer</h1>';

echo '<h2>From 1 to 100</h2>';

foreach ($list as $item) {
    echo $item . '<br/>';
}