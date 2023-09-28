<?php

declare(strict_types=1);

namespace App\Patterns\FactoryMethod\Interfaces;

interface Product
{
    public function operation(): string;
}