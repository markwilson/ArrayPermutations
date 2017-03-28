<?php

require_once __DIR__ . '/vendor/autoload.php';

$generator = new ArraySubsets\Generator();

$array = [1, 2, 3, 4, 5];
$length = 4;

$subsets = $generator->generate($array, $length);

foreach ($subsets as $subset) {
    echo implode(', ', $subset) . PHP_EOL;
}
