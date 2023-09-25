<?php

declare(strict_types=1);

namespace App\Products;

class ShopProductWriter
{
    protected array $products = [];

    public function setProducts(ShopProduct $products): static
    {
        $this->products[] = $products;
        return $this;
    }

    public function write(): string
    {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->getTitle()}: ";
            $str .= $shopProduct->getProducer();
            $str .= " ({$shopProduct->getPrice()})";
        }

        return $str;
    }
}