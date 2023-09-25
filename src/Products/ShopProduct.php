<?php

declare(strict_types=1);

namespace App\Products;

class ShopProduct
{
    protected int|float $discount = 0;

    public function __construct(
        protected string    $title,
        protected string    $producerFirstName,
        protected string    $producerMainName,
        protected int|float $price,
    ) {
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
}