<?php

declare(strict_types=1);

namespace App\Products;

use App\Products\Interfaces\Chargeable;
use PDO;

class ShopProduct implements Chargeable
{
    public const AVAILABLE    = 0;
    public const OUT_OF_STOCK = 1;

    protected int|float $discount = 0;
    protected int $taxRate = 20;

    public function __construct(
        protected string    $title,
        protected string    $producerFirstName,
        protected string    $producerMainName,
        protected int|float $price,
    ) {
    }

    public function calculateTax(float|int $price): float|int
    {
        return (($this->taxRate / 100) * $price);
    }
    
    public function getSummaryLine(): string
    {
        return "$this->title ({$this->getProducer()})";
    }

    public function getProducer(): string
    {
        return $this->producerMainName . ' ' . $this->producerFirstName;
    }

    public function setDiscount(int $num): static
    {
        $this->discount = $num;
        return $this;
    }

    public function getPrice(): float|int
    {
        return $this->price - $this->discount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function cdInfo(CDProduct $cdProduct): int
    {
        return $cdProduct->getPlayLength();
    }
}