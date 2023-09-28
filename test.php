<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$array = [
    'a' => 'one',
    'b' => 'two',
    'c' => 'three',
    'd' => 'four',
    'e' => 'five',
    'j' => 'six',
];
$key    = 'asd';
$result = $a[$key] ?? 'none';

$string = 'qw3';

//echo str_repeat('*', strlen($string)) . PHP_EOL;

//$randNum = rand(1, 10);
//echo "Guess a number between 1 and 10" . PHP_EOL;
//$output = (int)readline();
//echo "Random number: " . $randNum . PHP_EOL;
//if ($randNum !== $output) {
//    echo "Try again!" . PHP_EOL;
//    exit;
//}
//
//echo "You Won" . PHP_EOL;

