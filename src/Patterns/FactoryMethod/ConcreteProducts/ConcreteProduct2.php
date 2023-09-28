<?php

declare(strict_types=1);

namespace App\Patterns\FactoryMethod\ConcreteProducts;

use App\Patterns\FactoryMethod\Interfaces\Product;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}