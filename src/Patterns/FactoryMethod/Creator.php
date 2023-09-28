<?php

declare(strict_types=1);

namespace App\Patterns\FactoryMethod;

use App\Patterns\FactoryMethod\Interfaces\Product;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        return "Creator: The same creator's code has just worked with " .
            $product->operation();
    }
}