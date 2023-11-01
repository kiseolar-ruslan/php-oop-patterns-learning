<?php

declare(strict_types=1);

namespace App\Products;

use App\Products\Service;

class UtilityService extends Service
{
    protected int $taxRate = 20;

    public function calculateTax(float|int $price): float|int
    {
        return (($this->taxRate / 100) * $price);
    }

}