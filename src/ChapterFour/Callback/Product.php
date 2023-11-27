<?php

declare(strict_types=1);

namespace App\ChapterFour\Callback;

class Product
{
    public function __construct(
        protected string    $name,
        protected int|float $price
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float|int
    {
        return $this->price;
    }
}