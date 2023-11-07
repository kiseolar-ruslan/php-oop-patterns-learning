<?php

declare(strict_types=1);

namespace App\Products\Traits;

trait PriceUtilities
{
    public function calculateTax(float|int $price): float|int
    {
        return (($this->getTaxRate() / 100) * $price);
    }

    abstract public function getTaxRate(): float|int;
}