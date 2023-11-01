<?php

declare(strict_types=1);

namespace App\Products;

use App\Products\ShopProductWriter;

class TextProductWriter extends ShopProductWriter
{
    protected string $str = 'Goods: ';

    public function write(): void
    {
        /**
         * @var ShopProduct $product
         */
        foreach ($this->products as $product) {
            $this->str .= $product->getSummaryLine() . PHP_EOL;
        }
        echo $this->str;
    }
}