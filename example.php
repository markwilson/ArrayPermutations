<?php

require_once __DIR__ . '/vendor/autoload.php';

$generator = new ArrayPermutation\Generator();

$array = [1, 2, 3, 4, 5];
$length = 4;

$permutations = $generator->generate($array, $length);

foreach ($permutations as $permutation) {
    echo implode(', ', $permutation) . PHP_EOL;
}
