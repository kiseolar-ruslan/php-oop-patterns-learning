<?php

declare(strict_types=1);

namespace App\Patterns\FactoryMethod\ConcreteCreators;

use App\Patterns\FactoryMethod\ConcreteProducts\ConcreteProduct1;
use App\Patterns\FactoryMethod\Creator;
use App\Patterns\FactoryMethod\Interfaces\Product;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}