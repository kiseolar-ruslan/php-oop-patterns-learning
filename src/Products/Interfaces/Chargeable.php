<?php

declare(strict_types=1);

namespace App\Products\Interfaces;

interface Chargeable
{
    public function getPrice(): int|float;
}