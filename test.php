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

echo str_repeat('*', strlen($string)) . PHP_EOL;