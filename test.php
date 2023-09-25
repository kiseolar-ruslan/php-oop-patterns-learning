<?php

declare(strict_types=1);

use App\Cache\Cache;
use App\ChristmasTree\ChristmasTree;
use App\Patterns\Strategy\Actions\Child;
use App\Patterns\Strategy\Actions\Child2;
use App\Patterns\Strategy\Main;
use App\Patterns\TemplateMethod\AbstractClass;
use App\Patterns\TemplateMethod\SubClasses\FirstChild;
use App\SimulateNetworkLatency\SimulateNetworkLatency;

require_once __DIR__ . '/vendor/autoload.php';

$array = [
    'a' => 'one',
    'b' => 'two',
    'c' => 'three',
    'd' => 'four',
    'e' => 'five',
    'j' => 'six',
];
//$key = 'asd';
//$result = $a[$key] ?? 'none';

function app(AbstractClass $class): void
{
    $class->templateMethod();
}

app(new FirstChild('Middle', 1, 5, 10));