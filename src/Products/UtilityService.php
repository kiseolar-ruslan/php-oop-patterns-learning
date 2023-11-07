<?php

declare(strict_types=1);

namespace App\Products;

use App\Products\Service;
use App\Products\Traits\PriceUtilities;

class UtilityService extends Service
{
    use PriceUtilities {
        PriceUtilities::calculateTax as private;
    }

    protected int $taxRate = 20;

    public function __construct(protected float|int $price)
    {
    }

    public function getTaxRate(): float|int
    {
        return $this->taxRate;
    }

    public function getFinalPrice(): float|int
    {
        return ($this->price + $this->calculateTax($this->price));
    }
}