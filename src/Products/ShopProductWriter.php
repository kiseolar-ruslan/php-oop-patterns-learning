<?php

declare(strict_types=1);

namespace App\Products;

abstract class ShopProductWriter
{
    protected array $products = [];

    public function __construct(protected ShopProduct $allProducts)
    {
        $this->addProducts($this->allProducts);
    }

    public function addProducts(ShopProduct $products): static
    {
        $this->products[] = $products;
        return $this;
    }

    abstract public function write(): void;

//    public function write(): string
//    {
//        $str = "";
//        foreach ($this->products as $shopProduct) {
//            $str .= "{$shopProduct->getTitle()}: ";
//            $str .= $shopProduct->getProducer();
//            $str .= " ({$shopProduct->getPrice()})";
//        }
//
//        return $str;
//    }
}