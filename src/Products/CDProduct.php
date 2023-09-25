<?php

declare(strict_types=1);

namespace App\Products;

class CDProduct extends ShopProduct
{
    public function __construct(
        protected string    $title,
        protected string    $producerFirstName,
        protected string    $producerMainName,
        protected int|float $price,
        protected int       $playLength = 0,
    ) {
        parent::__construct(
            $title,
            $producerFirstName,
            $producerMainName,
            $price,
        );
    }

    public function getPlayLength(): int
    {
        return $this->playLength;
    }

    public function getSummaryLine(): string
    {
        return parent::getSummaryLine() . ": " . "Sound time - $this->playLength";
    }
}