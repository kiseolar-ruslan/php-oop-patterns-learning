<?php

declare(strict_types=1);

namespace App\Products;

class BookProduct extends ShopProduct
{
    public function __construct(
        protected string    $title,
        protected string    $producerFirstName,
        protected string    $producerMainName,
        protected float|int $price,
        protected int       $numPages = 0,
    ) {
        parent::__construct(
            $title,
            $producerFirstName,
            $producerMainName,
            $price,
        );
    }

    public function getNumberOfPage(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        return parent::getSummaryLine() . ": " . "{$this->getNumberOfPage()} pages";
    }

    public function getPrice(): float|int
    {
        return $this->price;
    }
}