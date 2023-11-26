<?php

declare(strict_types=1);


require_once __DIR__ . '/vendor/autoload.php';

$dateTime = new DateTime();

$array = [
    1  => [30],
    2  => [28],
    3  => [29],
    4  => [30],
    5  => [28],
    6  => [29],
    7  => [30],
    8  => [30],
    9  => [28],
    10 => [29],
    11 => [29],
    12 => [31],
];

$functionResult = function (int $month) use ($array): int {
    if ($month > 12 && $month < 1) {
        throw new Exception('Invalid month');
    }

    $res = $array[$month][0];

    return $res;
};

//var_dump($functionResult(12));

$a = '';

$res = empty($a) ? 'пусто' : 'не пусто';
//echo test();

exit;


