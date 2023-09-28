<?php

declare(strict_types=1);

use App\Patterns\FactoryMethod\ConcreteCreators\ConcreteCreator1;
use App\Patterns\FactoryMethod\ConcreteCreators\ConcreteCreator2;
use App\Patterns\FactoryMethod\Creator;

require_once __DIR__ . '/../vendor/autoload.php';

function clientCode(Creator $creator): void
{
    echo "Client: I'm not aware of the creator's class, but it still works." . PHP_EOL
        . $creator->someOperation();
}

echo "App: Launched with the ConcreteCreator1." . PHP_EOL;
clientCode(new ConcreteCreator1());
echo PHP_EOL;

echo "App: Launched with the ConcreteCreator2." . PHP_EOL;
clientCode(new ConcreteCreator2());