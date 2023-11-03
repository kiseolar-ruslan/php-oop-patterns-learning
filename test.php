<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

//$array = [
//    'a' => 'one',
//    'b' => 'two',
//    'c' => 'three',
//    'd' => 'four',
//    'e' => 'five',
//    'j' => 'six',
//];
//$key    = 'j';
//$result = $array[$key] ?? 'none';
//echo $result . PHP_EOL;

$text = '123,456,789';

$a = strtok($text, ',');

exit;


