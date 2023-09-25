<?php

declare(strict_types=1);

use App\Patterns\Strategy\Actions\Child;
use App\Patterns\Strategy\Actions\Child2;
use App\Patterns\Strategy\Main;

require_once __DIR__ . '/../vendor/autoload.php';

$mainClass = new Main(new Child());
echo $mainClass->execute();

$mainClass->changeObj(new Child2());
echo $mainClass->execute();