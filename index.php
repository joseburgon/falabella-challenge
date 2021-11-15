<?php

require __DIR__.'/vendor/autoload.php';

echo '<h1>Numbers Printer</h1>';
echo '<h2>From 1 to 100</h2>';

$printer = new \App\NumbersPrinter();

for ($i=1; $i < 101; $i++) {
    echo $printer->print($i) . '<br>';
}