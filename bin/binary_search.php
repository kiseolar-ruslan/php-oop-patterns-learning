<?php

declare(strict_types=1);

include_once __DIR__ . '/../vendor/autoload.php';

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
//echo count($a) - 1;
$bS = new \App\Algorithms\BinarySearch();
echo $bS->binarySearch($a, 5) . PHP_EOL;
